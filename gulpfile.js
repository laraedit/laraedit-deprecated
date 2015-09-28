var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass([
    	'bootstrap.scss',
    	'laraedit.scss'
    ], './resources/assets/css/laraedit.css');
    mix.copy('./node_modules/font-awesome/fonts', './public/fonts');
    mix.copy('./node_modules/devicons/fonts', './public/fonts');
    mix.copy('./node_modules/devicon/fonts', './public/fonts');
    mix.copy('./node_modules/devicon/icons', './public/icons');
    mix.styles([
    	'./resources/assets/css/laraedit.css',
    	'./node_modules/font-awesome/css/font-awesome.css',
    	'./node_modules/devicons/css/devicons.css',
        './node_modules/devicon/devicon.min.css',
    ], './public/css/laraedit.css');
    mix.scripts([
    	'./node_modules/jquery/dist/jquery.js',
    	'./node_modules/bootstrap-sass/assets/javascripts/bootstrap.js'
    ], './public/js/laraedit.js');
    mix.copy('./node_modules/ace-editor-builds/src-min-noconflict', './public/vendor/ace');
});
