var webpack = require('webpack');
var glob = require('glob');
var path = require('path');
var ExtractTextPlugin = require("extract-text-webpack-plugin");
var PurifyCSSPlugin = require('purifycss-webpack');
var CleanWebpackPlugin = require('clean-webpack-plugin');
var inProduction = (process.env.NODE_ENV === 'production');
var BrowserSyncPlugin = require('browser-sync-webpack-plugin')

module.exports = {
    entry: {
        app: [
            './src/js/main.js',
            './src/sass/main.scss'
        ],
        vendor: [
            'jquery'
        ]
    },
    output: {
        path: path.resolve(__dirname, './dist'),
        filename: '[name].js'
    },
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/,
                use: ExtractTextPlugin.extract({
                    use: ['css-loader','sass-loader'],
                    fallback: 'style-loader', 
                })
            },
            {
                test: /\.(png|jpe?g|gif|svg|eot|ttf|woff|woff2)$/,
                loaders: [
                    {
                        loader: "file-loader",
                        options: {
                            name: 'images/[name].[hash].[ext]'
                        }
                    },
                    'img-loader'
                ]
                
            },
            { 
                test: /\.js$/, 
                exclude: /node_modules/, 
                loader: "babel-loader" 
            }
        ]
    },
    plugins: [
        new CleanWebpackPlugin(['dist'],{
            root:     __dirname,
            verbose:  true,
            dry:      false
        }),
        new ExtractTextPlugin("[name].css"),
        /*
        new PurifyCSSPlugin({
            paths: glob.sync(path.join(__dirname, '*.html')),
            minimize: inProduction
        }),
        */
        new webpack.LoaderOptionsPlugin({
            minimize: inProduction
        }),
        new BrowserSyncPlugin({
            host: 'localhost',
            port: 3000,
            proxy: 'http://bulmascores.local/',
            files: [{
                match: [
                    '**/*.php',
                    'public/dist/**/*.css',
                    'public/dist/**/*.js'
                ]
            }]
        })
    ]
};

if(inProduction) {
    module.exports.plugins.push(
        new webpack.optimize.UglifyJsPlugin()
    );
}