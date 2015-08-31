var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('main.scss')
    	.styles([
    		'../../../public/css/main.css',
    		'../bower/wow/css/libs/animate.css'
    		])
    	.scripts([
    		'../bower/jquery/dist/jquery.min.js',
    		'../bower/foundation/js/foundation.min.js',
    		'../bower/foundation/js/foundation/foundation.magellan.js',
    		'../bower/parallax.js/parallax.min.js',
    		'../bower/wow/dist/wow.min.js'
    	]);


    	//.browserify('main.js')
});
