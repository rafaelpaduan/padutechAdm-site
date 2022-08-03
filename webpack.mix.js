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

mix
    .vue()
    .js('resources/js/app.js', 'public/js')
    .js('node_modules/@tabler/core/src/js/tabler.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('node_modules/@tabler/core/src/scss/tabler.scss', 'public/css');
