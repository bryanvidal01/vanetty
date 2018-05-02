var gulp = require('gulp');
var sass = require('gulp-sass');
const bs = require("browser-sync").create();

gulp.task('sass', function () {
    gulp.src('wp-content/themes/vanetty/assets/scss/*')
        .pipe(sass({includePaths: ['scss']}))
        .pipe(gulp.dest('wp-content/themes/vanetty/assets/css'));
});

gulp.task('default', ['sass'], function () {
    gulp.watch("wp-content/themes/vanetty/assets/scss/*.scss", ['sass']);
});
