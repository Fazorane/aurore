var gulp 		= require('gulp'),

	sass		= require('gulp-sass'),
	concat 		= require('gulp-concat'),
	uglify 		= require('gulp-uglify'),
	minifyCSS 	= require('gulp-minify-css'),
	zip 		= require('gulp-zip'),
	plumber 	= require('gulp-plumber');

var src = 'lib/',
	dev = '';

/* front */

var front = {

	scripts: [
/*		src + 'js/ressources/jquery-1.11.3.js',
		src + 'js/ressources/html5shiv.js',
		src + 'js/ressources/respond.min.js',
		src + 'js/ressources/foundation.min.js',
		src + 'js/ressources/jquery.fullPage.min.js',
		src + 'js/ressources/jquery.slimscroll.min.js',*/
		src + 'js/main.js'
	],

	styles: [
		/*src + 'css/foundation/foundation.css',*/
		src + 'css/app/app.css'
	]

};


var back = {

	scripts: [
		src + 'js/back/**/*.js'
	],

	styles: [
		src + 'scss/back/**/*.scss'
	]

};

/* Dev tasks */

gulp.task('devJS', function() {
	'use strict';
	gulp.src(front.scripts)
		.pipe(concat('main.min.js'))
		.pipe(gulp.dest(dev + 'lib/js'))
	gulp.src(back.scripts)
		.pipe(concat('main.back.min.js'))
		.pipe(gulp.dest(dev + 'lib/js'));
});

gulp.task('devCSS', function() {
	'use strict';
	gulp.src(front.styles)
		.pipe(concat('main.min.css'))
		.pipe(gulp.dest(dev + 'lib/css'))
	gulp.src(back.styles)
		.pipe(concat('main.back.min.css'))
		.pipe(gulp.dest(dev + 'lib/css'));
});

gulp.task('devSASS', function() {
	'use strict';
	gulp.src(front.styles)
		.pipe(plumber({
		errorHandler: function (err) {
			console.log(err);
			this.emit('end');
		}
		}))
		.pipe(sass())
		.pipe(concat('main.min.css'))
		.pipe(gulp.dest(dev + 'lib/css'))
	gulp.src(back.styles)
		.pipe(concat('main.back.min.css'))
		.pipe(gulp.dest(dev + 'lib/css'));
});

/* Prod tasks */

gulp.task('prodJS', function() {
	'use strict';
	gulp.src(front.scripts)
		.pipe(concat('main.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest(dev + 'lib/js'))
	gulp.src(back.scripts)
		.pipe(concat('main.back.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest(dev + 'lib/js'));
});

gulp.task('prodCSS', function() {
	'use strict';
	gulp.src(front.styles)
		.pipe(concat('main.min.css'))
		.pipe(minifyCSS())
		.pipe(gulp.dest(dev + 'lib/css'))
	gulp.src(front.styles)
		.pipe(concat('main.back.min.css'))
		.pipe(minifyCSS())
		.pipe(gulp.dest(dev + 'lib/css'));
});

gulp.task('prodSASS', function() {
	'use strict';
	gulp.src(front.styles)
		.pipe(plumber({
		errorHandler: function (err) {
			console.log(err);
			this.emit('end');
		}
		}))
		.pipe(sass())
		.pipe(concat('main.min.css'))
		.pipe(minifyCSS())
		.pipe(gulp.dest(dev + 'lib/css'))
	gulp.src(back.styles)
		.pipe(sass())
		.pipe(concat('main.back.min.css'))
		.pipe(minifyCSS())
		.pipe(gulp.dest(dev + 'lib/css'));
});

/* Watch */

gulp.task('watch', function() {
	'use strict';
	//gulp.watch(front.scripts, ['devJS'])
	gulp.watch(front.styles, ['devSASS']);
});

/* Dev */

gulp.task('dev', ['devJS', 'devSASS']);

/* Prod */

gulp.task('prod', ['prodJS', 'prodCSS']);

/* Zip */

gulp.task('zip', ['prodJS', 'prodCSS'], function(){
	'use strict';
	gulp.src(dev + '**/*')
		.pipe(zip('dev.zip'))
		.pipe(gulp.dest(''));
});
