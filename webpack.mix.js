const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/sass/style.scss', 'public/css');

mix.js('resources/js/script.js', 'public/js');

mix.copy('node_modules/slick-carousel/slick/slick.css', 'public/css')
    .copy('node_modules/slick-carousel/slick/slick-theme.css', 'public/css')
    .copy('node_modules/slick-carousel/slick/slick.min.js', 'public/js');
