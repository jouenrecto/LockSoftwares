let mix = require('laravel-mix');
let path = require('path')

mix.webpackConfig({
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/assets/js/components'),
            '~': path.resolve(__dirname, 'resources/assets')
        }
    }
});

mix.extract([
    'vue',
    'axios',
    'vue-router'
]);
mix.js('resources/assets/js/main.js', 'public/js')
   .sass('resources/assets/sass/main.sass', 'public/css')
   .sass('resources/assets/sass/theme.scss', 'public/css');
