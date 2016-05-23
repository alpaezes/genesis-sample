// Require our dependencies
var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function(){
	return gulp.src('sass/style.scss')
	.pipe(sass({
		outputStyle: 'expanded', // Options: nested, expanded, compact, compressed
		indentType: 'tab',
		indentWidth: 1
	})) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('./'))
});

// Gulp watch syntax
gulp.task('watch', function(){
	gulp.watch('sass/**/*.scss', ['sass']);
})
