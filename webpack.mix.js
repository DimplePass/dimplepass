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

// Compile and version JavaScript.
mix.js('resources/assets/js/app.js', 'public/js')
	.version();

// Compile and version CSS.
mix.sass('resources/assets/sass/app.scss', 'public/css')
	.version();

// Copy assets into public directory.
mix.copy('resources/assets/img/', 'public/img/');
mix.copy('resources/assets/fonts/', 'public/fonts/');
mix.copy('node_modules/font-awesome/fonts/', 'public/fonts/');

// Browsersync Reload
mix.browserSync('localhost.dimplepass.com');
