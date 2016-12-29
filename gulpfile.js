const gulp = require('gulp');
const elixir = require('laravel-elixir');
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
    //fonts
    mix.copy('vendor/bower_components/bootstrap/fonts/**', 'public/build/fonts/bootstrap');

    //polyfill
    mix.copy('vendor/bower_components/jquery-placeholder/jquery.placeholder.js', 'public/js/jquery.placeholder.js');
    mix.copy('resources/assets/js/setPlaceholder.js', 'public/js/setPlaceholder.js');
    mix.scripts(['jquery.placeholder.js','setPlaceholder.js'], 'public/js/jquery.placeholder.js', 'public/js');

    //common.css
    mix.copy('resources/assets/css/common.css', 'public/css/common.css');
    mix.copy('resources/assets/css/main.css', 'public/css/main.css');
    mix.styles(['common.css', 'main.css'], 'public/css/app.css', 'public/css');

    //common.js
    mix.copy('vendor/bower_components/jquery/dist/jquery.min.js', 'public/js/vendor/jquery.js');
    mix.scripts(['vendor/jquery.js'], 'public/js/vendor.js', 'public/js');

    //adminCommon.css
    mix.sass(['admin/adminApp.scss'], 'public/css/adminApp.css', null, {includePaths: ['vendor/bower_components/bootstrap-sass/assets/stylesheets']});

    //adminCommon.js
    mix.copy('vendor/bower_components/bootstrap/dist/js/bootstrap.min.js', 'public/js/vendor/bootstrap.js');
    mix.copy('vendor/bower_components/bootstrap-material-design/dist/js/material.min.js', 'public/js/vendor/material.js');
    mix.copy('vendor/bower_components/bootstrap-material-design/dist/js/ripples.min.js', 'public/js/vendor/ripples.js');
    mix.scripts(['vendor/bootstrap.js', 'vendor/material.js', 'vendor/ripples.js'], 'public/js/adminApp.js', 'public/js');

    //adminDataTable.css
    mix.copy('vendor/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css', 'public/css/vendor/dataTables.bootstrap.css');
    mix.styles(['vendor/dataTables.bootstrap.css'], 'public/css/adminDataTable.css', 'public/css');

    //adminDataTable.js
    mix.copy('vendor/bower_components/datatables.net/js/jquery.dataTables.min.js', 'public/js/vendor/jquery.dataTables.js');
    mix.copy('vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js', 'public/js/vendor/dataTables.bootstrap.js');
    mix.scripts(['vendor/jquery.dataTables.js', 'vendor/dataTables.bootstrap.js'], 'public/js/adminDataTable.js', 'public/js');

    //searchNshoping.css
    mix.copy('resources/assets/css/event.css', 'public/css/event.css');
    mix.styles(['event.css'], 'public/css/event.css', 'public/css');

    //searchNshoping.js
    mix.copy('resources/assets/js/event.js', 'public/js/event.js');
    mix.scripts(['event.js'], 'public/js/event.js', 'public/js');

    //baidu.css
    mix.copy('vendor/bower_components/jt.timepicker/jquery.timepicker.css', 'public/css/vendor/jquery.timepicker.css');
    mix.copy('vendor/bower_components/jquery-tag-editor/jquery.tag-editor.css', 'public/css/vendor/jquery.tag-editor.css');
    mix.copy('resources/assets/css/baiduMap.css', 'public/css/baiduMap.css');
    mix.styles(['vendor/jquery.timepicker.css', 'vendor/jquery.tag-editor.css', 'baiduMap.css'], 'public/css/baidu.css', 'public/css');

    //baidu.js
    mix.copy('vendor/bower_components/jt.timepicker/jquery.timepicker.js', 'public/js/vendor/jquery.timepicker.js');
    mix.copy('vendor/bower_components/datepair.js/dist/datepair.min.js', 'public/js/vendor/datepair.js');
    mix.copy('vendor/bower_components/datepair.js/dist/jquery.datepair.min.js', 'public/js/vendor/jquery.datepair.js');
    mix.copy('vendor/bower_components/jquery-tag-editor/jquery.caret.min.js', 'public/js/vendor/jquery.caret.js');
    mix.copy('vendor/bower_components/jquery-tag-editor/jquery.tag-editor.min.js', 'public/js/vendor/jquery.tag-editor.js');
    mix.copy('resources/assets/js/baiduMap.js', 'public/js/baiduMap.js');
    mix.scripts(['vendor/datepair.js', 'vendor/jquery.datepair.js', 'vendor/jquery.timepicker.js', 'vendor/jquery.caret.js', 'vendor/jquery.tag-editor.js', 'baiduMap.js'], 'public/js/baidu.js', 'public/js');

    mix.version(['css/app.css', 'css/event.css', 'js/vendor.js', 'js/event.js', 'css/adminApp.css', 'js/adminApp.js', 'css/baidu.css', 'js/baidu.js', 'css/adminDataTable.css', 'js/adminDataTable.js', 'js/jquery.placeholder.js']);
});




