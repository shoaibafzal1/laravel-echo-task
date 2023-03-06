const mix = require('laravel-mix');

mix.js('resources/js/laravel-echo-setup.js', 'public/js')
    .sass('resources/css/app.scss', 'public/css');