var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var cssnano = require('gulp-cssnano');
var pixrem = require('gulp-pixrem');
var postcss = require('gulp-postcss');
var flexbugs = require('postcss-flexbugs-fixes');
var objectfitimages = require('postcss-object-fit-images');
var livereload = require('gulp-livereload');

gulp.task('sass', function () {

    var processors = [
        flexbugs(),
        objectfitimages()
    ];

    return gulp.src("./build/styles.scss")
        .pipe(sass().on('error', sass.logError))
        .pipe(pixrem())
        .pipe(cssnano())
        .pipe(postcss(processors))
        .pipe(autoprefixer())
        .pipe(gulp.dest('./assets/css/'))
        .pipe(livereload())
});

gulp.task('php', function () {
    livereload();
});


gulp.task('sass:watch', function () {
    livereload.listen();
    gulp.watch('./build/**/*.scss', ['sass']);
    gulp.watch('./*.php', ['php'])
});