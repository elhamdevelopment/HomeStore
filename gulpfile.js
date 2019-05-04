'use strict';

var gulp = require('gulp'),
    concat = require('gulp-concat'),
    browserSync = require('browser-sync').create(),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps');

var sassOptions = {
    outputStyle: 'compressed'
};

var admin_ScriptComponents = [
    'node_modules/jquery/dist/jquery.slim.min.js',
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/moment/min/moment.min.js',
    'node_modules/moment-jalaali/build/moment-jalaali.js',
    'node_modules/jquery-validation/dist/jquery.validate.min.js',
    'node_modules/jquery-validation/dist/localization/messages_fa.js',
    'node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js',
    'node_modules/popper.js/dist/umd/popper.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/datatables.net/js/jquery.dataTables.min.js',
    'node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
    'resources/js/admin-dashboard.min.js',
    'node_modules/flickity/dist/flickity.pkgd.min.js',
    'node_modules/@fortawesome/fontawesome-free/js/all.min.js',
    'node_modules/izitoast/dist/js/iziToast.min.js',
    'node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js',
    'node_modules/angular/angular.min.js',
    'node_modules/angular-animate/angular-animate.min.js',
    'node_modules/angular-sanitize/angular-sanitize.min.js',
    'node_modules/angular-messages/angular-messages.min.js',
    'node_modules/angular-password/angular-password.min.js',
    'node_modules/angular-utils-pagination/dirPagination.js',
    'node_modules/adm-dtp/dist/ADM-dateTimePicker.min.js',
    'node_modules/angularjs-toaster/toaster.min.js',
    'node_modules/ui-select/dist/select.min.js',
    'node_modules/angular-loading-bar/src/loading-bar.js',
    'resources/js/admin-default.js', //setting and requirements,
    'resources/js/angularApp/app.js',
    'resources/js/angularApp/filter/date-convert.js',
    'resources/js/angularApp/service/*.js',
    'resources/js/angularApp/controller/*.js'
];
var web_ScriptComponents = [
    'node_modules/jquery/dist/jquery.slim.min.js',
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/jquery-validation/dist/jquery.validate.min.js',
    'node_modules/jquery-validation/dist/localization/messages_fa.js',
    'node_modules/popper.js/dist/umd/popper.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/izitoast/dist/js/iziToast.min.js',
    'node_modules/flickity/dist/flickity.pkgd.min.js',
    'node_modules/@fortawesome/fontawesome-free/js/all.min.js',
    'node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js',
    'resources/js/default.js',
    'resources/js/web/*.js'
];

var web_CssComponents = [
    'node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css',
    'node_modules/izitoast/dist/css/iziToast.min.css',
    'node_modules/iranianbanklogos/dist/ibl.min.css'
];
var admin_CssComponents = [
    'resources/sass/admin/lite-purple.min.css',
    'node_modules/angular-loading-bar/src/loading-bar.css',
    'node_modules/angularjs-toaster/toaster.min.css',
    'node_modules/adm-dtp/dist/ADM-dateTimePicker.min.css',
    'node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css',
    'node_modules/izitoast/dist/css/iziToast.min.css',
    'node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
    'node_modules/iranianbanklogos/dist/ibl.min.css'
    // 'node_modules/perfect-scrollbar/css/perfect-scrollbar.css'
];
gulp.task('cssWebComponents', function () {
    return gulp.src(web_CssComponents)
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(concat('_web-components.scss'))
        .pipe(gulp.dest('resources/sass/dest'))
});
gulp.task('cssAdminComponents', function () {
    return gulp.src(admin_CssComponents)
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(concat('_admin-components.scss'))
        .pipe(gulp.dest('resources/sass/dest'))
});

//WEB
gulp.task('web-css',['cssWebComponents'], function () {
    return gulp.src('resources/sass/app.scss')
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(concat('web.css'))
        .pipe(gulp.dest('public/css'))
});
gulp.task('web-script', function () {
    return gulp.src(web_ScriptComponents)
        .pipe(concat('web.js'))
        .pipe(gulp.dest('public/js'))
});

//ADMIN
gulp.task('admin-css',['cssAdminComponents'], function () {
    return gulp.src('resources/sass/admin.scss')
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(concat('admin.css'))
        .pipe(gulp.dest('public/css'))
});
gulp.task('admin-script', function () {
    return gulp.src(admin_ScriptComponents)
        .pipe(concat('admin.js'))
        .pipe(gulp.dest('public/js'))
});

gulp.task('reload', ['web-css', 'web-script','admin-css','admin-script'], function () {
    browserSync.reload();
});

gulp.task('serve', ['web-css', 'web-script','admin-css','admin-script'], function () {
    browserSync.init({
        proxy: {
            target: "http://localhost:8000",
            ws: true
        },
        port: 8000
    });

    gulp.watch(['resources/sass/app.scss','resources/sass/*.scss', 'resources/sass/web/*.scss'], ['reload']);
    gulp.watch(['resources/js/*.js','resources/js/web/*.js','resources/js/angularApp/controller/*.js','resources/js/angularApp/service/*.js'], ['webScriptComponents','adminScriptComponents'],['reload']);
    gulp.watch(['resources/views/*persian-number.php','resources/views/layouts/*persian-number.php'], ['reload']);
});

gulp.task('default', ['serve']);

