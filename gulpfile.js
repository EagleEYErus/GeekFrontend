const gulp = require('gulp');
const sass = require('gulp-sass');
const plumber = require('gulp-plumber');
const watch = require('gulp-watch');

gulp.task('scss', function () {
    function run() {
        return gulp
            .src(['./scss/*.scss', '!./scss/header.scss', '!./scss/footer.scss'])
            .pipe(plumber())
            .pipe(sass())
            .pipe(gulp.dest('./css'));
    }

    watch('./scss/*.scss', run);

    return run();
});

gulp.task('default', ['scss']);