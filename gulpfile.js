'use strict';

var gulp = require('gulp'),
    concat = require('gulp-concat'),
    browserSync = require('browser-sync').create(),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps');

var sassOptions = {
    outputStyle: 'compressed'
};
var webScriptComponents = [
    'node_modules/jquery/dist/jquery.slim.min.js',
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/flickity/dist/flickity.pkgd.min.js',
    'node_modules/popper.js/dist/umd/popper.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/@fortawesome/fontawesome-free/js/all.min.js',
    'node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js',
    'resources/js/default.js'


    // 'resources/js/default.js',
];
var cssComponents = [
    'node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css',
];
gulp.task('cssWebComponents', function () {
    return gulp.src(cssComponents)
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(concat('_web-component.scss'))
        .pipe(gulp.dest('resources/sass/'))
});
gulp.task('web-css',['cssWebComponents'], function () {
    return gulp.src('resources/sass/app.scss')
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(concat('web.css'))
        .pipe(gulp.dest('public/css'))
});
gulp.task('web-script', function () {
    return gulp.src(webScriptComponents)
        .pipe(concat('web.js'))
        .pipe(gulp.dest('public/js'))
});

gulp.task('reload', ['web-css', 'web-script'], function () {
    browserSync.reload();
});

gulp.task('serve', ['web-css', 'web-script'], function () {
    browserSync.init({
        proxy: {
            target: "http://localhost:8000/",
            ws: true
        },
        port: 8000
    });

    gulp.watch(['resources/sass/app.scss','resources/sass/*.scss', 'resources/sass/web/*.scss'], ['reload']);
    gulp.watch(['resources/js/*.js'], ['webScriptComponents'],['reload']);
    gulp.watch(['resources/views/*.php','resources/views/layouts/*.php'], ['reload']);
});

gulp.task('default', ['serve']);

// var cssAdminComponents = [
//     'node_modules/bootstrap/dist/css/bootstrap.min.css',
//     'node_modules/font-awesome/css/font-awesome.min.css',
//     'Content/AdminLTE-RTL-master/AdminLTE-RTL-master/dist/css/AdminLTE.min.css', //AdminLTE Theme
//     'Content/AdminLTE-RTL-master/AdminLTE-RTL-master/dist/css/skins/all-skins.min.css',
//     'Content/AdminLTE-RTL-master/AdminLTE-RTL-master/dist/fonts/fonts-fa.css',
//     'Content/AdminLTE-RTL-master/AdminLTE-RTL-master/dist/css/bootstrap-rtl.min.css',
//     'node_modules/angular-ui-switch/angular-ui-switch.min.css',
//     'node_modules/adm-dtp/dist/ADM-dateTimePicker.min.css',
//     'node_modules/angularjs-toaster/toaster.min.css',
//     'node_modules/ui-select/dist/select.min.css',
//     'node_modules/selectize/dist/css/selectize.default.css',
//     'node_modules/ng-img-crop-full-extended/compile/minified/ng-img-crop.css',
//     'node_modules/angular-loading-bar/src/loading-bar.css'
// ];
// var scriptAdminComponents = [
//     'node_modules/jquery/dist/jquery.min.js',//jQuery 2.2.4
//     'node_modules/bootstrap/dist/js/bootstrap.min.js',
//     'Content/AdminLTE-RTL-master/AdminLTE-RTL-master/plugins/slimScroll/jquery.slimscroll.min.js',
//     'Content/AdminLTE-RTL-master/AdminLTE-RTL-master/dist/js/app.js',
//     'node_modules/angular/angular.min.js',
//     'node_modules/angular-animate/angular-animate.min.js',
//     'node_modules/angular-messages/angular-messages.min.js',
//     'node_modules/angular-ui-switch/angular-ui-switch.min.js',
//     'node_modules/adm-dtp/dist/ADM-dateTimePicker.min.js',
//     'node_modules/angular-sanitize/angular-sanitize.min.js',
//     'node_modules/ui-select/dist/select.min.js',
//     'node_modules/ng-file-upload/dist/ng-file-upload-shim.min.js',
//     'node_modules/ng-file-upload/dist/ng-file-upload.min.js',
//     'node_modules/ng-img-crop-full-extended/compile/minified/ng-img-crop.js',
//     'node_modules/angular-utils-pagination/dirPagination.js',
//     'node_modules/angular-password/angular-password.min.js',
//     'node_modules/angularjs-toaster/toaster.min.js',
//     'node_modules/ngmap/build/scripts/ng-map.min.js',
//     'node_modules/angular-loading-bar/src/loading-bar.js'
// ];

// //admin Style
// gulp.task('adminStyleComponents', function () {
//     return gulp.src(cssAdminComponents)
//         .pipe(sass(sassOptions).on('error', sass.logError))
//         .pipe(concat('admin-components.scss'))
//         .pipe(gulp.dest('Content/haghaComponents/sass'))
// });
// gulp.task('haghaAdminStyleComponents',['adminStyleComponents'], function () {
//     return gulp.src('Content/haghaComponents/sass/adminSass/*.scss')
//         .pipe(sass(sassOptions).on('error', sass.logError))
//         .pipe(concat('hagha-admin-components.scss'))
//         .pipe(gulp.dest('Content/haghaComponents/sass'))
// });
// gulp.task('cssAdmin',['haghaAdminStyleComponents'], function () {
//     return gulp.src('Content/haghaComponents/sass/adminStyle.scss')
//         .pipe(sass(sassOptions).on('error', sass.logError))
//         .pipe(concat('adminStyle.css'))
//         .pipe(gulp.dest('Content/css'))
//         .pipe(browserSync.stream());
// });
// gulp.task('scriptAdminComponents', function () {
//     return gulp.src(scriptAdminComponents)
//         .pipe(concat('admin-components.js'))
//         .pipe(gulp.dest('Content/script'))
// });

//app
