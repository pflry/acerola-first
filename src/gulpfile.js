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
    merge = require('merge-stream'),
    webpack = require('webpack'),
    webpackStream = require('webpack-stream'),
    named = require('vinyl-named'),
    bundleAnalyzer = require('webpack-bundle-analyzer').BundleAnalyzerPlugin,
    WebpackBundleSizeAnalyzerPlugin = require('webpack-bundle-size-analyzer').WebpackBundleSizeAnalyzerPlugin,
    browserSync = require('browser-sync').create();


//-- Paths
const src = {
    scss: 'sass/styles.scss',
    critical: 'sass/critical.scss',
    js: 'js/index.js',
    fonts: 'fonts/*.*',
    icons: 'icons/*.*',
    images: 'images/*.*'
}

const dest = {
    css: {
        rep: '../dist/css/',
        files: '../dist/css/*.*'
    },
    js: {
        rep: '../dist/js/',
        files: '../dist/js/*.*'
    },
    icons: {
        rep: '../dist/icons/',
        files: '../dist/icons/*.*'
    },
    images: {
        rep: '../dist/images/',
        files: '../dist/images/*.*',
    },
    tpl: '../',
    subsites: '../../acerola2019subsites/'
}


//-- SCSS
gulp.task('css', () => {
    let cleanCSS = gulp.src(dest.css.files, {
            read: false
        })
        .pipe(clean({
            force: true
        }));

    let criticalCSS = gulp.src(src.critical)
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
        .pipe(gulp.dest(dest.tpl));

    let sCSS = gulp.src(src.scss)
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
        .pipe(gulp.dest(dest.css.rep))
        .pipe(browserSync.stream());

    return merge(cleanCSS, criticalCSS, sCSS);
});


//-- Javascript

// Scripts bundler
gulp.task('scripts', () => {
    let cleanJS = gulp.src(dest.js.files, {
            read: false
        })
        .pipe(clean({
            force: true
        }))

    let webpackJS = gulp.src(src.js)
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
        .pipe(gulp.dest(dest.js.rep))
        .pipe(browserSync.stream());

    return merge(cleanJS, webpackJS);
});

// Scripts bundler + infos
gulp.task('scripts:infos', () => {
    let cleanJS = gulp.src(dest.js.files, {
            read: false
        })
        .pipe(clean({
            force: true
        }))

    let webpackJS = gulp.src(src.js)
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
        .pipe(gulp.dest(dest.js.rep))
        .pipe(browserSync.stream());

    return merge(cleanJS, webpackJS);
});


//-- Assets
gulp.task('copy', () => {
    let images = gulp.src(src.images)
        .pipe(changed(dest.images.rep))
        .pipe(gulp.dest(dest.images.rep));

    let icones = gulp.src(src.icons)
        .pipe(changed(dest.icons.rep))
        .pipe(gulp.dest(dest.icons.rep));

    return merge(images, icones);
});


//-- Clean all dist folders
gulp.task('clean', () => {
    return gulp.src([
            dest.css.files,
            dest.js.files,
            dest.images.files,
            dest.icons.files
        ], {
            read: false
        })
        .pipe(clean({
            force: true
        }));
});


//-- BrowserSync
gulp.task('serve', () => {
    browserSync.init({
        proxy: "http://localhost/acerola",
        ws: true
    });

    gulp.watch('sass/**/*.scss', ['css']);
    gulp.watch(dest.subsites + 'src/sass/**/*.scss', ['css:child'])
    gulp.watch('js/*.js', ['scripts']);
    gulp.watch('../**/*.php').on('change', browserSync.reload);
    gulp.watch(dest.subsites + '/**/*.php').on('change', browserSync.reload);
});


//-- CHILD THEME SUBSITES

//-- Copy DIST to child themes
gulp.task('clean:child', () => {
    return gulp.src(dest.subsites + 'dist/', {
            read: false
        })
        .pipe(clean({
            force: true
        }));
});

gulp.task('copy:child', () => {
    gulp.src('../dist/**/*.*')
        .pipe(gulp.dest(dest.subsites + 'dist/'))
});

//-- SCSS
gulp.task('css:child', () => {

    let delfile = gulp.src(dest.subsites + 'style.*', {
            read: false
        })
        .pipe(clean({
            force: true
        }))

    let sCSS = gulp.src(dest.subsites + 'src/sass/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(dest.subsites))

    return merge(delfile, sCSS);
});


//-- COMMANDES

//-- Default
gulp.task('default', ['copy', 'serve']);


//-- Build
gulp.task('build', ['css', 'scripts', 'copy', 'copy:child']);

gulp.task('build:infos', ['css', 'scripts:infos', 'copy']);