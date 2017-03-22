const { mix } = require('laravel-mix');

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
    .scripts([
        'resources/assets/js/pace.min.js',
    ], 'public/js/app.js', './')
    .js('resources/assets/js/app.js',
    'public/js/app.js')
    .sass('resources/assets/sass/app.scss', 'public/css')
        .copy('resources/assets/vendor/bootstrap/fonts', 'public/fonts')
        .copy('resources/assets/vendor/font-awesome/fonts', 'public/fonts')
        .copy('resources/assets/vendor/summernote/font', 'public/css/font')
        .styles([
        'resources/assets/vendor/bootstrap/css/bootstrap.css',
        'resources/assets/vendor/animate/animate.css',
        'resources/assets/vendor/font-awesome/css/font-awesome.css',
        'resources/assets/vendor/summernote/summernote.css',
        'resources/assets/vendor/summernote/summernote-bs3.css',
        'resources/assets/vendor/toastr/toastr.min.css',
    ], 'public/css/vendor.css', './');