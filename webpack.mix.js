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


const nodeModules = [
    'filepond/dist/',
];

for(let i = 0; i < nodeModules.length; i++) {
    mix.copy(`node_modules/${nodeModules[i]}`, `public/assets/vendor/${nodeModules[i]}`).version();
}

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
