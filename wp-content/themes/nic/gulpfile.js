var gulp 		 = require('gulp');
var browserSync  = require('browser-sync');
var reload 		 = browserSync.reload;
var sass 		 = require('gulp-sass');
// var autoprefixer = require('gulp-autoprefixer');

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
    './css/app.css',
    './*.php'
    ];
 
    //initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    proxy: "localhost/nic/",
    notify: false
    });
});

gulp.task('styles', function() {
	gulp.src('sass/**/*.scss')
	.pipe(sass().on('error', sass.logError))
	.pipe(gulp.dest('./css/'))
    // .pipe(autoprefixer('last 2 versions'))
	.pipe(reload({stream:true}));
});

gulp.task('default', ['styles', 'browser-sync'], function() {
	gulp.watch('sass/**/*.scss', ['styles']);
});