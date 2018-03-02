![alt text](http://demo-bulmascores.seyongcho.com/wp-content/uploads/2018/03/bulmascores-horizontal.png "Bulmascores")



## Setting up a new project without proper workflow always takes time and it's very tedious. Bulmascores saves you time setting up your new wordpress website.

Bulmascores is a Wordpress starter theme. It aims to combine Underscores + Bulma + Webpack.

[Official Website | Download Links](http://bulmascores.seyongcho.com/)

[Demo Site](http://demo-bulmascores.seyongcho.com)

You can download take the theme, upload to your wordpress, and run `npm install`.

## Getting Started
### 5 minutes setup:
* Download the theme zip file [here](http://bulmascores.seyongcho.com/)
* Upload theme to your new blank Wordpress install.
* Activate the Bulmascores at the theme backend.
* If you want to use Webpack, check below for more setup options.

After this, you should be set up to load the front-page.php. visit the site and check if front-page.php is loading. You may now go to next step: **setup webpack**.

## Setup Webpack:
* Install the node dependencies:
```sh
npm install
```

* Install webpack if you haven't already. 
```sh
npm install webpack
```

* Try to compile the sass and js in the src directory by typing 
```sh
npm run dev
```
You should see the compiled sass and js files in the dist directory.

* Go to your theme directory, find `webpack.config.js`. Modify BrowserSyncPlugin settings to match your own local host's urls. 
```javascript
new BrowserSyncPlugin({
    host: 'localhost',
    port: 3000,
    proxy: 'http://bulmascores.valet/',
    files: [{
        match: [
            '**/*.php',
            'public/dist/**/*.css',
            'public/dist/**/*.js'
        ]
    }]
})
```

* Try to run with browsersync:
```sh
npm run watch
```

You are all set!

## Features
### Custom Nav Walker
Bulmascores is also integrated with custom `Bulma_Nav_Walker` class, which supports Bulma dropdown navigation bars.
![](https://seyongcho.com/wp-content/uploads/2018/02/BulmaNavWalker.gif)

### Webpack, npm, Sass all built in
Focus on your website, instead of spending time to set up your project. 
Bulmascores is integrated with Webpack, so you can bring Sass and latest ES6 javascript functionalities to your wordpress project!

### Child Theme Support
Bulmascores comes with ready-made child theme, which you can just upload to your project. 


## Entry Files for Sass and JS
* `src/sass/main.scss` for sass. 
* `src/js/main.js` for javascript.

## Future implementation plans
* Integration with WooCommerce

![alt text](https://bulma.io/images/made-with-bulma.png "Made with Bulma")