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
    tpl: '../'
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

gulp.task('css', (callback)=> {
    sequence('css:clean', 'css:critical', 'css:styles')(callback)
});

// CSS admin styles
gulp.task('admin:css', () => {
    gulp.src(path.scss + 'style-editor.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(gulp.dest('../'))
});


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

gulp.task('js', (callback)=> {
    sequence('js:clean', 'js:bundles')(callback)
});

gulp.task('js:infos', (callback)=> {
    sequence('js:clean', 'js:bundlesinfos')(callback)
});


//-- ASSETS
//------------------

// Images copy
gulp.task('images:copy', ()=> {
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
gulp.task('assets:copy', (callback)=> {
    sequence('images:copy', 'icons:copy')(callback)
});


//-- DIST 
//------------------

// DIST clean all rep
gulp.task('dist:clean', ()=> {
    gulp.src(path.dest, {
            read: false
        })
        .pipe(clean({
            force: true
        }));
});


//-- BROWSER SYNC
//------------------

gulp.task('serve', ()=> {
    browserSync.init({
        proxy: "http://localhost/acerola",
        ws: true
    });

    gulp.watch(path.scss + '/**/*.scss', ['css']);
    gulp.watch('js/*.js', ['js']);
    gulp.watch('../**/*.php').on('change', browserSync.reload);
});


//-- COMMANDS
//------------------

//-- Default
gulp.task('default', sequence('assets:copy', 'serve'));

//-- Build
gulp.task('build', sequence('assets:copy', 'css', 'js'));

//-- Build with bundles infos
gulp.task('build:infos', sequence('assets:copy', 'css', 'js:infos'));