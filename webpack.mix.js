const mix = require('laravel-mix');

mix.combine(['node_modules/bootstrap/dist/css/bootstrap.css'], 'public/css/vendor.css').minify('public/css/vendor.css');
mix.combine([
    'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    'node_modules/jquery/dist/jquery.js'
], 'public/js/vendor.js').minify('public/js/vendor.js');

mix.js('resources/js/app.js', 'public/js/app.js').minify('public/js/app.js');
mix.postCss('resources/css/app.css', 'public/css/app.css').minify('public/css/app.css');
