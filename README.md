# Bulmascores

Hello, I am Bulmascores. A starter theme for Wordpress that uses [Bulma](https://bulma.io/). 

Do you want to use Webpack + Sass + ES6 and all the latest good that these technologies have to offer? 

You can download take the theme, and run npm install, and you are all set! For directory structures and how to get started guide, go to the documentation (link to documentation page).

Inspired by [Underscores](https://underscores.me/), and [Understrap](https://understrap.com/), Bulmascores tries to reduce the project set up time for your next Wordpress website. 

Focus on your website, instead of spending time to set up your project. 

Bulmascores is integrated with Webpack, so you can bring Sass and latest ES6 javascript functionalities to your wordpress project!

## Getting Started
### Option 1: Theme upload
5 minutes setup:
* Download the theme zip file from this repo.
* Upload theme to your new blank Wordpress install.
* Rename the theme folder to `bulmascores`.
* Activate the Bulmascores at the theme backend.
* If you want to use Webpack, check below.

### Option 2: Using [All-in-One WP Migration](https://wordpress.org/plugins/all-in-one-wp-migration/)
* Download the All-in-One WP Migration file for Bulmascores project [here](https://www.dropbox.com/s/vc8hyl30mlw15py/bulmascores.local-20180221-111533-188.wpress?dl=0)
* Create a fresh install of Wordpress, install the All-in-One WP Migration from plugins.
* Import the file downloaded.
* It should already be set up with everything you need, including the child theme. How easy was that?

> your user name and passwords will be following: 
> Username: test@tester.com
> Password: test123@

After this, you should be set up to load the front-page.php. visit the site and check if front-page.php is loading. You may now go to next step: **setup webpack**.

## Setup Webpack:

* Install the node dependencies:
```sh
npm install
```

* Try to compile the sass and js in the src directory by typing 
```sh
npm run dev
```
You should see the compiled sass and js files in the dist directory.

>If you get webpack not found error, install webpack by `npm install webpack`

* Go to your theme directory, find `webpack.config.js`. Modify BrowserSyncPlugin settings to match your own local host's urls. 

* Try to run with browsersync:
```sh
npm run watch
```

You are all set!


## Child Theme Support
If you'd like to use a child theme for your development, you can use [this](https://github.com/se468/Bulmascores-child) as a starting point. Simply download as zip, and rename the zip file to `bulmascores-child`, and upload the theme to your Wordpress install.


## Entry Files for Sass and JS
* `src/sass/main.scss` for sass. 
* `src/js/main.js` for javascript.

## Future implementation plans
* Integration with WooCommerce
* Integrating with Timber templating engine
* Integrating with VueJS

![alt text](https://github.com/se468/Bulmascores/blob/master/images/made-with-bulma.png "Made with Bulma")