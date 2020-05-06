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
    .sass('resources/sass/app.scss', 'public/css');





mix.styles([
    'public/css/app.css',
    'public/Admin/scss/adminlte.css',
    'public/Admin/scss/bootstrap-rtl.min.css',
    'public/Admin/scss/custom-style.css',

], 'public/css/admin.css');
mix.scripts([
    'public/js/app.js',
    'public/Admin/js/adminlte.js',
    'public/Admin/js/dashboard.js',
    'public/Admin/js/demo.js',

], 'public/js/admin.js');








mix.styles([
    'public/Home/css/bootstrap.min.css',
    'public/Home/css/animate.css',
    'public/Home/css/meanmenu.css',
    'public/Home/css/magnific-popup.min.css',
    'public/Home/css/owl.carousel.min.css',
    'public/Home/css/nice-select.css',
    'public/Home/css/jquery.dataTables.min.css',
    'public/Home/css/style.css',
    'public/Home/css/TimeCircles.css',
    'public/Home/css/responsive.css',
], 'public/css/home.css');
mix.scripts([
    'public/Home/js/jquery.min.js',
    'public/Home/js/wow.min.js',
    'public/Home/js/popper.min.js',
    'public/Home/js/canvas.min.js',
    'public/Home/js/jquery.meanmenu.min.js',
    'public/Home/js/tilt.jquery.min.js',
    'public/Home/js/jquery.magnific-popup.min.js',
    'public/Home/js/owl.carousel.min.js',
    'public/Home/js/waypoints.min.js',
    'public/Home/js/jquery.counterup.min.js',
    'public/Home/js/jquery.nice-select.min.js',
    'public/Home/js/jquery.ajaxchimp.min.js',
    'public/Home/js/form-validator.min.js',
    'public/Home/js/contact-form-script.js',
    'public/Home/js/TimeCircles.js',
    'public/Home/js/jquery.dataTables.min.js',
    'public/Home/js/main.js',
], 'public/js/home.js');


