const gulp = require('gulp');
const sass = require('gulp-sass');
const plumber = require('gulp-plumber');
const watch = require('gulp-watch');

gulp.task('scss', () => {
	const run = () => {
		return gulp
			.src('./scss/*.scss')
			.pipe(plumber())
			.pipe(sass())
			.pipe(gulp.dest('./css'));
	}	
	watch('./scss/*.scss', run);

	return run();
});

gulp.task('default', ['scss']);