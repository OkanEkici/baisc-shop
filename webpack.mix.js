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

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
    'popper.js/dist/umd/popper.js': ['Popper'],
    flickity: 'Flickity'
});

mix.js('kunde/js/app.js', 'public/js')
    .sass('kunde/sass/app.scss', 'public/css');

mix.scripts([
    'kunde/theme/src/assets/js/card.js',
    'kunde/theme/src/assets/js/collapse.js',
    'kunde/theme/src/assets/js/countdown.js',
    'kunde/theme/src/assets/js/dropdown.js',
    'kunde/theme/src/assets/js/flickity.js',
    'kunde/theme/src/assets/js/form.js',
    'kunde/theme/src/assets/js/highlight.js',
    'kunde/theme/src/assets/js/img-comp.js',
    'kunde/theme/src/assets/js/list.js',
    'kunde/theme/src/assets/js/map.js',
    'kunde/theme/src/assets/js/navbar.js',
    'kunde/theme/src/assets/js/popover.js',
    'kunde/theme/src/assets/js/rating.js',
    'kunde/theme/src/assets/js/simplebar.js',
    'kunde/theme/src/assets/js/smooth-scroll.js',
    'kunde/theme/src/assets/js/tooltip.js',
    'kunde/theme/src/assets/js/vote.js',
], 'public/js/theme.min.js');
    

mix.copyDirectory('kunde/theme/src/assets/img', 'public/assets/img');
mix.copyDirectory('kunde/theme/src/assets/libs', 'public/assets/js/libs');
mix.copyDirectory( 'kunde/img', 'public/images', false );
mix.copyDirectory( 'kunde/fonts', 'public/fonts', false );