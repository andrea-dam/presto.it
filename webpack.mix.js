// webpack.mix.js

let mix = require('laravel-mix');

mix.copyDirectory('resources/assets/fonts', 'public/fonts');
mix.js('src/app.js', 'dist').setPublicPath('dist');