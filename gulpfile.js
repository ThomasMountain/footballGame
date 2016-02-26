var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {

    mix.copy([
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'node_modules/font-awesome/css/font-awesome.css',
        'node_modules/jquery-ui/themes/dark-hive/jquery-ui.css',
        'node_modules/datatables-bootstrap3-plugin/media/css/datatables-bootstrap3.css',
    ], 'resources/assets');

    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');

    mix.sass('app.scss', 'dashboard.scss');

    mix.scripts([
        "jquery/dist/jquery.js",
        "jquery-ui/jquery-ui.js",
        "bootstrap/dist/js/bootstrap.js",
        "datatables/media/js/jquery.dataTables.js",
        "datatables-bootstrap3-plugin/media/js/datatables-bootstrap3.js",
        "chart.js/Chart.js"
    ], '', 'node_modules');

    mix.styles([
        "bootstrap.css",
        "font-awesome.css",
        "sass/app.scss",
        "sass/dashboard.scss",
        "jquery-ui.css",
        "datatables-bootstrap3.css",
    ], '', 'resources/assets');

});
