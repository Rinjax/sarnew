let mix = require('laravel-mix');

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

mix.sass('resources/assets/sass/app.scss', 'public/css')
    .combine([
        'node_modules/fullcalendar/dist/fullcalendar.css',
        'public/css/app.css'
    ], 'public/css/app.css')
    .version();

mix.js('resources/assets/js/bootstrap.js', 'public/js/app.js')
    .scripts([
        'public/js/app.js',
        'node_modules/moment/min/moment.min.js',
        'node_modules/fullcalendar/dist/fullcalendar.min.js'
    ], 'public/js/app.js')
    .version();

/*
mix.scripts([
    //'resources/assets/js/jquery.min.js',
    //'resources/assets/js/moment.min.js',
    'node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
    'node_modules/dropzone/dist/dropzone.js'

], 'public/js/app.js');*/
