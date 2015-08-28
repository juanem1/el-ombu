var elixir = require('laravel-elixir');

elixir(function(mix) {

    // Vendor styles
    mix.styles(['font-awesome.min.css', 'simplemde.min.css'],
        './public/css/vendor.css'
    );

    // App styles
    mix.less('app.less');

    // Vendor scripts
    mix.scripts(
    	[
    		'jquery.js', 
    		'plugins.js',
    		'functions.js',
    		'jquery.camera.js',
    		'simplemde.min.js'
    	],
        './public/js/app.js'
    );

    // Versioning files
    mix.version(['css/vendor.css', 'css/app.css', 'js/app.js']);


});