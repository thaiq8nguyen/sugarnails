let mix = require('laravel-mix');
const webpack = require('webpack');
let bs = require('browser-sync').create();

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.webpackConfig({
        plugins: [
            new webpack.ProvidePlugin({
                $: 'jquery',
                jQuery: 'jquery',
                'window.jQuery': 'jquery'
            })
        ]
    });

mix.browserSync({
    open:'external',
    proxy:'local.sugarnails.dev'
});


mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/carousel.js','public/js/')
    .js('resources/assets/js/header.js', 'public/js')
    .js('resources/assets/js/standard-signage.js', 'public/js/signages')
    .js('resources/assets/js/valentine-signage.js', 'public/js/signages')
    .js('resources/assets/js/thanksgiving-signage.js','public/js/signages')
    .js('resources/assets/js/christmas-signage.js','public/js/signages')
    .js('resources/assets/js/holiday-giftcard-signage.js','public/js/signages')
    .js('resources/assets/js/new-year-signage.js','public/js/signages')
    .js('resources/assets/js/feedback.js','public/js')
    .js('resources/assets/js/passport.js','public/js');


   /* .sass('resources/assets/sass/app.scss', 'public/css');*/
