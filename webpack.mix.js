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
mix.styles([
    'resources/css/style.css',
], 'public/assets/css/all.css');
mix.js([
    'resources/js/bootstrap.js',
    'resources/js/app.js',
    'resources/js/main.js',
], 'public/assets/js/all.js');
mix.copyDirectory('resources/img', 'public/assets/img');
mix.copyDirectory('resources/fonts', 'public/assets/fonts');
