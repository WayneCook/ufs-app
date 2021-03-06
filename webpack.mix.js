const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    mix.sass('resources/sass/app.scss', 'public/css');
    // .sass('public/toastr/toastr.scss', 'public/toastr/toastr.css');


    // mix.copy('node_modules/toastr/*','public/toastr');
    // mix.copy('node_modules/slick-carousel/*','public/slick-carousel');

    mix.browserSync({
        proxy: 'http://127.0.0.1:8000/',
        browser: 'chrome'
      });
