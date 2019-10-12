const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up awll the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');
mix.copyDirectory('resources/assets', 'public/assets');

mix.styles([
  'resources/assets/vendors/bootstrap/css/bootstrap.min.css',
  'resources/assets/vendors/flexslider/flexslider.min.css',
  'resources/assets/vendors/swipebox/css/swipebox.min.css',
  'resources/assets/vendors/slick/slick.min.css',
  'resources/assets/vendors/slick/slick.min.css',
  'resources/assets/vendors/slick/slick-theme.min.css',
  'resources/assets/vendors/animate.min.css',
  'resources/assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css',
  'resources/assets/vendors/pageloading/css/component.min.css',
  'resources/assets/fonts/font-icon/style.css',
  'resources/assets/css/layout.css',
  'resources/assets/css/elements.css',
  'resources/assets/css/extra.css',
  'resources/assets/css/widget.css',
  'resources/assets/css/responsive.css',
  'resources/assets/css/jquery.growl.css',
  'resources/assets/css/update.css',
], 'public/css/style.css');

mix.scripts([
  'resources/assets/vendors/html5shiv.js',
  'resources/assets/vendors/respond.min.js',
  'resources/assets/vendors/pageloading/js/snap.svg-min.js',
  'resources/assets/vendors/pageloading/sidebartransition/js/modernizr.custom.js',
], 'public/js/beforeScripts.js');

mix.scripts([
  'resources/assets/vendors/jquery-1.10.2.min.js',
  'resources/assets/vendors/bootstrap/js/bootstrap.min.js',
  'resources/assets/vendors/flexslider/jquery.flexslider-min.js',
  'resources/assets/vendors/swipebox/js/jquery.swipebox.min.js',
  'resources/assets/vendors/slick/slick.min.js',
  'resources/assets/vendors/isotope/isotope.pkgd.min.js',
  'resources/assets/vendors/jquery-countTo/jquery.countTo.min.js',
  'resources/assets/vendors/jquery-appear/jquery.appear.min.js',
  'resources/assets/vendors/parallax/parallax.min.js',
  'resources/assets/vendors/gmaps/gmaps.min.js',
  'resources/assets/vendors/audiojs/audio.min.js',
  'resources/assets/vendors/vide/jquery.vide.min.js',
  'resources/assets/vendors/pageloading/js/svgLoader.min.js',
  'resources/assets/vendors/pageloading/js/classie.min.js',
  'resources/assets/vendors/pageloading/sidebartransition/js/sidebarEffects.min.js',
  'resources/assets/vendors/nicescroll/jquery.nicescroll.min.js',
  'resources/assets/vendors/wowjs/wow.min.js',
  'resources/assets/vendors/skrollr.min.js',
  'resources/assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
  'resources/assets/js/layout.js',
  'resources/assets/js/elements.js',
  'resources/assets/js/widget.js',
  'resources/assets/js/jquery.growl.js',

], 'public/js/afterScripts.js');