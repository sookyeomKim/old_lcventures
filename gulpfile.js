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
    mix.copy('vendor/bower_components/bootstrap/fonts/**',
    'public/build/fonts');

mix.copy('resources/assets/css/common.css', 'public/css/common.css');

mix.copy('resources/assets/css/main.css', 'public/css/main.css');

//compiled main.css
mix.styles(['common.css','main.css'], 'public/css/app.css', 'public/css');

mix.version(['css/app.css']);
});

