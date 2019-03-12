//-- Dependencies
const gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    hash = require('gulp-hash'),
    clean = require('gulp-clean'),
    concat = require('gulp-concat-util'),
    rename = require('gulp-rename'),
    stripCssComments = require('gulp-strip-css-comments'),
    changed = require('gulp-changed'),
    sequence = require('gulp-sequence'),
    webpack = require('webpack'),
    webpackStream = require('webpack-stream'),
    named = require('vinyl-named'),
    bundleAnalyzer = require('webpack-bundle-analyzer').BundleAnalyzerPlugin,
    WebpackBundleSizeAnalyzerPlugin = require('webpack-bundle-size-analyzer').WebpackBundleSizeAnalyzerPlugin,
    browserSync = require('browser-sync').create();


//-- Paths
const path = {
    scss: 'sass/',
    js: 'js/',
    images: 'images/',
    icons: 'icons/',
    dest: '../dist/',
    tpl: '../',
    child: '../../acerola2019subsites/'
};


//-- SCSS
//------------------

// CSS clean
gulp.task('css:clean', ()=> {
    gulp.src(path.dest + 'css/*.*', {
            read: false
        })
        .pipe(clean({
            force: true
        }));
});

// CSS critical
gulp.task('css:critical', ()=> {
    gulp.src(path.scss + 'critical.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(stripCssComments({
            preserve: false
        }))
        .pipe(concat.header('<style>'))
        .pipe(concat.footer('</style>'))
        .pipe(rename({
            basename: 'header-styles',
            extname: '.php'
        }))
        .pipe(gulp.dest('../'));
});

// CSS styles
gulp.task('css:styles', ()=> {
    gulp.src(path.scss + 'styles.scss')
        .pipe(sourcemaps.init())
        .pipe(hash({
            hashLength: 6,
            template: '<%= name %>.<%= hash %><%= ext %>'
        }))
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(path.dest + 'css/'))
        .pipe(browserSync.stream());
});

gulp.task('css', sequence('css:clean', 'css:critical', 'css:styles'));


//-- JAVASCRIPT
//------------------

// JS clean
gulp.task('js:clean', ()=> {
    gulp.src(path.dest + 'js/*.*', {
            read: false
        })
        .pipe(clean({
            force: true
        }))
});

// JS bundler
gulp.task('js:bundles', ()=> {
    gulp.src(path.js + 'index.js')
        .pipe(named())
        .pipe(webpackStream({
            mode: 'production',
            devtool: 'source-map',
            plugins: [
                new webpack.ProvidePlugin({
                    $: 'jquery',
                    jQuery: 'jquery',
                    'window.jQuery': 'jquery',
                })
            ],
            output: {
                filename: '[name].[chunkhash:6].js'
            },
            optimization: {
                splitChunks: {
                    automaticNameDelimiter: '-',
                    cacheGroups: {
                        vendors: {
                            name: 'vendors',
                            chunks: 'all',
                            test: /[\\/]node_modules[\\/](highlight.js|jquery)[\\/]/,
                            maxSize: 90000
                        }
                    }
                }
            }
        }))
        .pipe(gulp.dest(path.dest + 'js/'))
        .pipe(browserSync.stream());
});

// JS bundler + infos
gulp.task('js:bundlesinfos', ()=> {
    gulp.src(path.js + 'index.js')
        .pipe(named())
        .pipe(webpackStream({
            mode: 'production',
            devtool: 'source-map',
            plugins: [
                new webpack.ProvidePlugin({
                    $: 'jquery',
                    jQuery: 'jquery',
                    'window.jQuery': 'jquery',
                }),
                new bundleAnalyzer({
                    analyzerMode: 'static',
                    defaultSizes: 'parsed',
                    reportFilename: 'reporting/wba-report.html',
                    openAnalyzer: true,
                    generateStatsFile: true,
                    statsFilename: 'reporting/wba-stats.json'
                }),
                new WebpackBundleSizeAnalyzerPlugin('reporting/plain-report.txt')
            ],
            output: {
                filename: '[name].[chunkhash:6].js'
            },
            optimization: {
                splitChunks: {
                    automaticNameDelimiter: '-',
                    cacheGroups: {
                        vendors: {
                            name: 'vendors',
                            chunks: 'all',
                            test: /[\\/]node_modules[\\/](highlight.js|jquery)[\\/]/,
                            maxSize: 90000
                        }
                    }
                }
            }
        }))
        .pipe(gulp.dest(path.dest + 'js/'))
        .pipe(browserSync.stream());
});

gulp.task('js', sequence('js:clean', 'js:bundles'));
gulp.task('js:infos', sequence('js:clean', 'js:bundlesinfos'));


//-- ASSETS
//------------------

// Images copy
gulp.task('images:copy', () => {
    gulp.src(path.images + '*.*')
        .pipe(changed(path.dest + 'images/'))
        .pipe(gulp.dest(path.dest + 'images/'));
});

// Icons copy
gulp.task('icons:copy', ()=> {
    gulp.src(path.icons + '*.*')
        .pipe(changed(path.dest + 'icons/'))
        .pipe(gulp.dest(path.dest + 'icons/'));
});

// Assets copy
gulp.task('assets:copy', sequence('images:copy', 'icons:copy'));


//-- DIST 
//------------------

// DIST clean all rep
gulp.task('dist:clean', () => {
    return gulp.src([
            path.dest + 'css/*.*',
            path.dest + 'js/*.*',
            path.dest + 'images/*.*',
            path.dest + 'icons/*.*'
        ], {
            read: false
        })
        .pipe(clean({
            force: true
        }));
});


//-- CHILD THEME SUBSITES
//------------------

//-- DIST CHILD

// DIST child clean
gulp.task('child:clean:dist', () => {
    return gulp.src(path.child + 'dist/', {
            read: false
        })
        .pipe(clean({
            force: true
        }));
});

// DIST child copy form parent
gulp.task('child:copy:dist', () => {
    gulp.src(path.dest + '**/*.*')
        .pipe(gulp.dest(path.child + 'dist/'))
});

// DIST child
gulp.task('child:dist', sequence('child:clean:dist', 'child:copy:dist'));


//-- SCSS CHILD

// CSS child clean
gulp.task('child:clean:css', ()=> {
    gulp.src(path.child + 'style.*', {
            read: false
        })
        .pipe(clean({
            force: true
        }))
});

// CSS child styles
gulp.task('child:styles:css', ()=> {
    gulp.src(path.child + 'src/sass/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(path.child))
});

// CSS child
gulp.task('child:css', sequence('child:clean:css', 'child:styles:css'));


//-- GLOBAL CHILD
gulp.task('child', sequence('child:dist', 'child:css'));


//-- BROWSER SYNC
//------------------

gulp.task('serve', () => {
    browserSync.init({
        proxy: "http://localhost/acerola",
        ws: true
    });

    gulp.watch(path.scss + '/**/*.scss', ['css']);
    gulp.watch(path.child + 'src/sass/**/*.scss', ['child:css'])
    gulp.watch('js/*.js', ['js']);
    gulp.watch('../**/*.php').on('change', browserSync.reload);
    gulp.watch(path.child + '/**/*.php').on('change', browserSync.reload);
});


//-- COMMANDS
//------------------

//-- Default
gulp.task('default', sequence('assets:copy', 'serve'));

//-- Build
gulp.task('build', sequence('css', 'js', 'assets:copy', 'child'));

//-- Build with bundles infos
gulp.task('build:infos', sequence('css', 'js:infos', 'assets:copy', 'child'));