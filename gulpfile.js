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

elixir(function(mix) {
    mix.sass('bootstrap.scss');
    mix.copy('./node_modules/font-awesome/fonts', './public/fonts');
    mix.copy('./node_modules/devicons/fonts', './public/fonts');
    mix.styles([
    	'./public/css/bootstrap.css', 
    	'./node_modules/font-awesome/css/font-awesome.css',
    	'./node_modules/devicons/css/devicons.css'
    ], './public/css/laraedit.css');
    mix.scripts([
    	'./node_modules/jquery/dist/jquery.js',
    	'./node_modules/bootstrap-sass/assets/javascripts/bootstrap.js'
    ], './public/js/laraedit.js');
    mix.copy('./node_modules/ace-editor-builds/src-min-noconflict', './public/vendor/ace');
});
