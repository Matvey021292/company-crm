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

mix.browserSync({proxy: 'http://localhost:8000'})
    .js([
            'node_modules/admin-lte/plugins/jquery/jquery.min.js',
            'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.min.js',
            'node_modules/admin-lte/dist/js/adminlte.min.js',
            'resources/js/common.js'
        ],
        'public/js')
    .js('resources/js/common.js', 'public/js/common.js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles(
        [
            'node_modules/admin-lte/dist/css/adminlte.min.css',
            'node_modules/admin-lte/dist/css/skins/skin-blue.min.css'
        ],
        'public/css/common.css'
    )
    .sourceMaps();
