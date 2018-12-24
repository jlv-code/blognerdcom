// Paths
const path = {
    'css': 'assets/css',
    'js': 'assets/js',
    'fonts': 'assets/fonts',
    'images': 'assets/images',
    'sass': 'assets/sass',
    'maps': 'maps',
    'node_modules': 'node_modules',
    'dist': 'dist'
};

// Requirements
const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const minify = require('gulp-minify');
const order = require('gulp-order');
const image = require('gulp-image');
const sourcemaps = require('gulp-sourcemaps');

// Moving third-party lib from Node Modules
gulp.task( 'third-party-from-node-modules', function () {

    // JQUERY
    // gulp.src( `./${path.node_modules}/jquery/dist/jquery.js` )
    //     .pipe( gulp.dest( `./${path.js}` ) );
    // console.log('jQuery lib copied successfully!');

    // BOOTSTRAP JS
    gulp.src( `./${path.node_modules}/bootstrap/dist/js/bootstrap.bundle.js` )
        .pipe( gulp.dest( `./${path.js }`) );
    console.log('Bootstrap 4 bundle copied successfully!');

    // FONTAWESOME WEBFONTS
    gulp.src( `./${path.node_modules}/@fortawesome/fontawesome-free/webfonts/**/*.*` )
        .pipe( gulp.dest( `./${path.dist}/fonts` ) );
    console.log('Fontawesome webfonts copied successfully!');

});

// Moving Images
gulp.task( 'assets-images', function () {

    gulp.src( `./${path.images}/**/*.*` )
        .pipe( image() )
        .pipe( gulp.dest( `./${path.dist}/images` ));

});

// Moving Fonts
gulp.task( 'assets-fonts', function () {

    gulp.src( `./${path.fonts}/**/*.*` )
        .pipe( gulp.dest( `./${path.dist}/fonts` ));

});

// Compiling Sass files
gulp.task( 'compile-sass', function () {

    gulp.src( `./${path.sass}/**/*.{sass, scss}` )
        .pipe( sourcemaps.init() )
        .pipe(sass({
            outputStyle: 'compressed',
            precision: 8
        }))
        .on( 'error', sass.logError )
        .pipe( sourcemaps.write( `./${path.dist}/${path.maps}` ) )
        .pipe( gulp.dest( './' ) );
    console.log('Sass files compiled successfully!');

});

// Concat and Uglify js files
gulp.task( 'scripts', function(){

    gulp.src( `./${path.js}/**/*.js` )
        .pipe( sourcemaps.init() )
        .pipe(order([
            'bootstrap.bundle.js',
            '*.custom.js',
            'chatstack.js'
        ]))
        .pipe( concat( 'scripts.js' ) )
        .pipe(minify({
            ext: {
                src: '.js',
                min: '.min.js'
            }
        }))
        .pipe( sourcemaps.write( `./${path.maps}` ) )
        .pipe( gulp.dest( `./${path.dist}` ) );
    console.log('Scripts files built it successfully!');

});

// Moving Static Files
gulp.task('static-files', ['assets-images', 'assets-fonts']);

// Watch any files edition
gulp.task('watch', function () {
    gulp.watch( `./${path.sass}/**/*.{sass, scss}`, [ 'compile-sass' ] );
    gulp.watch( `./${path.js}/**/*.js`, [ 'scripts' ]);
});

// Default task
gulp.task( 'default', [ 'watch' ] );