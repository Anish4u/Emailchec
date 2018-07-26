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

   mix.js([
       'resources/assets/js/app.js',
       'resources/assets/js/jquery.dataTables.min.js',
       'resources/assets/js/adminlte.min.js',
       'resources/assets/js/select2.min.js',
       'resources/assets/js/myScript.js',
       'resources/assets/js/jquery-2.0.3.min.js',
        ], 'public/js/app.js')
           .sass('resources/assets/sass/app.scss', 'public/css')
           .styles([

               'resources/assets/css/select2.min.css',
               'resources/assets/css/AdminLTE.min.css',
               'resources/assets/css/myStyle.css',
               'resources/assets/css/skin-blue.min.css',
               'resources/assets/css/myDataTable.css',
               'resources/assets/css/style.css',
               'resources/assets/css/myFont.css'
               // 'resources/assets/css/bootstrap.min.css'
           ],
                   'public/css/myApp.css')
.copy('resources/assets/css/fonts', 'public/fonts')

           .copy('resources/assets/img', 'public/img');
