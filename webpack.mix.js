let mix = require('laravel-mix');
const webpack = require('webpack');

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

mix.browserSync('sugarnails.dev:8888');

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/carousel.js','public/js/')
    .js('resources/assets/js/header.js', 'public/js')
    .js('resources/assets/js/signage.js', 'public/js');


   /* .sass('resources/assets/sass/app.scss', 'public/css');*/
