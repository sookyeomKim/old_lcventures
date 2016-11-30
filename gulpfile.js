const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.copy('vendor/bower_components/bootstrap/fonts/**', 'public/build/fonts');

    mix.copy('vendor/bower_components/bootstrap/dist/css/bootstrap.min.css', 'public/css/vendor/bootstrap.css');

    mix.copy('vendor/bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.min.css', 'public/css/vendor/bootstrap-material-design.css');

    mix.copy('vendor/bower_components/bootstrap-material-design/dist/css/ripples.min.css', 'public/css/vendor/ripples.css');

    mix.copy('resources/assets/css/common.css', 'public/css/common.css');

    mix.copy('resources/assets/css/main.css', 'public/css/main.css');

    mix.copy('resources/assets/css/event.css', 'public/css/event.css');

    mix.copy('vendor/bower_components/jquery/dist/jquery.min.js', 'public/js/vendor/jquery.js');

    mix.copy('vendor/bower_components/bootstrap/dist/js/bootstrap.min.js', 'public/js/vendor/bootstrap.js');

    mix.copy('vendor/bower_components/bootstrap-material-design/dist/js/material.min.js', 'public/js/vendor/material.js');

    mix.copy('vendor/bower_components/bootstrap-material-design/dist/js/ripples.min.js', 'public/js/vendor/ripples.js');

    mix.copy('resources/assets/js/event.js', 'public/js/event.js');

    //compiled main.css
    mix.styles(['common.css', 'main.css'], 'public/css/app.css', 'public/css');

    //compiled event.css
    mix.styles(['event.css'], 'public/css/event.css', 'public/css');

    //compiled adminApp.css
    mix.styles(['vendor/bootstrap.css', 'vendor/bootstrap-material-design.css', 'vendor/ripples.css'], 'public/css/adminApp.css', 'public/css');

    //compiled vendor.js
    mix.scripts(['vendor/jquery.js'], 'public/js/vendor.js', 'public/js');

    //compiled event.js
    mix.scripts(['event.js'], 'public/js/event.js', 'public/js');

    //compiled adminApp.js
    mix.scripts(['vendor/jquery.js', 'vendor/bootstrap.js', 'vendor/material.js', 'vendor/ripples.js'], 'public/js/adminApp.js', 'public/js');

    mix.version(['css/app.css', 'css/event.css', 'js/vendor.js', 'js/event.js', 'css/adminApp.css', 'js/adminApp.js']);
});

