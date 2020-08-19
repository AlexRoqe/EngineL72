const mix = require('laravel-mix');

 /* Mix Assets */
 mix.js('resources/js/app.js', 'public/js')
     .sass('resources/sass/app.scss', 'public/css');
 /* Mix Assets */

/* Laravel Lang */
mix.copyDirectory('vendor/caouecs/laravel-lang/src/es', 'resources/lang/es');
/* Laravel Lang */
        