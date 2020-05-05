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
    .js('resources/js/admin.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')




mix.styles([
    'public/home/css/bootstrap.min.css',
    'public/home/css/TimeCircles.css',
    'public/home/css/animate.css',
    'public/home/css/meanmenu.css',
    'public/home/css/magnific-popup.min.css',
    'public/home/css/owl.carousel.min.css',
    'public/home/css/nice-select.css',
    'public/home/css/jquery.dataTables.min.css',
    'public/home/css/style.css',


], 'public/css/all.css');


mix.scripts([
    'public/home/js/jquery.min.js',
    'public/home/js/wow.min.js',
    'public/home/js/popper.min.js',
    'public/home/js/canvas.min.js',
    'public/home/js/jquery.meanmenu.min.js',
    'public/home/js/tilt.jquery.min.js',
    'public/home/js/jquery.magnific-popup.min.js',
    'public/home/js/owl.carousel.min.js',
    'public/home/js/waypoints.min.js',
    'public/home/js/jquery.counterup.min.js',
    'public/home/js/jquery.nice-select.min.js',
    'public/home/js/jquery.ajaxchimp.min.js',
    'public/home/js/form-validator.min.js',
    'public/home/js/contact-form-script.js',
    'public/home/js/TimeCircles.js',
    'public/home/js/jquery.dataTables.min.js',
    'public/home/js/main.js',

], 'public/js/all.js');
