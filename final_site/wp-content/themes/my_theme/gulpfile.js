
'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    babel = require('gulp-babel'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    autoprefixer = require('gulp-autoprefixer'),
    plumber = require('gulp-plumber'),
    decomment = require('gulp-decomment'),
    rename = require('gulp-rename'),
    imagemin = require('gulp-imagemin'),
    mode = require('gulp-mode')({
        modes: ['production', 'development'],
        default: 'development',
        verbose: false
    });

var LIB_JS_INCLUDE_PATHS = [
    './node_modules/jquery/dist/jquery.js',
    './node_modules/slick-carousel/slick/slick.min.js',
    './node_modules/jquery-countto/jquery.countTo.js'
];

var CUSTOM_JS_SOURCE = [
    './source-js/main.js',
];

function handleError (err) {
    console.log(err.toString());
    this.emit('end')
}

gulp.task('lib-js', function () {
    return gulp.src(LIB_JS_INCLUDE_PATHS)
        .pipe(plumber({ errorHandler: handleError }))
        .pipe(mode.production(decomment()))
        .pipe(mode.development(sourcemaps.init()))
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(mode.development(sourcemaps.write()))
        .pipe(gulp.dest('./assets/js'))
});

gulp.task('sass', function () {
    return gulp.src('./sass/**/*.scss')
        .pipe(plumber({errorHandler: handleError}))
        .pipe(mode.development(sourcemaps.init()))
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({browsers: ['last 2 versions', 'safari 8', 'ie 11', 'opera 12.1', 'ios 6', 'android 4']}))
        .pipe(mode.development(sourcemaps.write()))
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(gulp.dest('./assets/css/'))
});

gulp.task('scripts', function () {
    return gulp.src(CUSTOM_JS_SOURCE)
        .pipe(plumber({ errorHandler: handleError }))
        .pipe(mode.production(decomment()))
        .pipe(mode.development(sourcemaps.init()))
        .pipe(babel({compact: true}))
        .pipe(rename({suffix: '.min'}))
        .pipe(mode.development(sourcemaps.write()))
        .pipe(gulp.dest('./assets/js/'))
});

gulp.task('images', async function () {
    gulp.src('./images/**/*')
        .pipe(plumber({errorHandler: handleError }))
        .pipe(imagemin())
        .pipe(gulp.dest('./assets/images'))
});

gulp.task('watch', async function () {
    gulp.watch('./sass/**/*.scss', gulp.series('sass'))
    gulp.watch('./source-js/main.js', gulp.series('scripts'))
});

gulp.task('default', function (done) {
    return gulp.series(
        'lib-js', 'sass', 'scripts', 'images'
    )(done)
});




