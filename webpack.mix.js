const mix = require("laravel-mix");
require("laravel-mix-purgecss");

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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    "resources/css/admin-custom.css",
    "resources/css/bootstrap.min.css",
    "resources/css/buttons.css",
    "resources/css/color.css",
    "resources/css/components-cols.css",
    "resources/css/components.css",
    "resources/css/feather.css",
    "resources/css/flags.css",
    "resources/css/icons.css",
    "resources/css/style.css",
    "resources/plugins/side/css/main.css",
    "resources/plugins/toggle-sidebar/sidemenu.css",
    "resources/fonts/fonts/font-awesome.min.css"
], "resources/css/app.css")

mix.postCss("resources/css/app.css", "public/css/app.css").purgeCss();

mix.scripts([
    "resources/js/vendors/jquery-3.2.1.min.js",
    "resources/js/vendors/bootstrap.bundle.min.js",
    "resources/plugins/side/js/main.js",
    "resources/plugins/toggle-sidebar/sidemenu.js"
], "resources/js/app.js")

mix.js("resources/js/app.js", "public/js/app.js");
