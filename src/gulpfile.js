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
    fonts: {
        rep: '../dist/fonts/',
        files: '../dist/fonts/*.*'
    },
    icons: {
        rep: '../dist/icons/',
        files: '../dist/icons/*.*'
    },
    images: {
        rep: '../dist/images/',
        files: '../dist/images/*.*',
    },
    tpl: '../'
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
gulp.task('copy:assets', () => {
    let polices = gulp.src(src.fonts)
        .pipe(changed(dest.fonts.rep))
        .pipe(gulp.dest(dest.fonts.rep));

    let images = gulp.src(src.images)
        .pipe(changed(dest.images.rep))
        .pipe(gulp.dest(dest.images.rep));

    let icones = gulp.src(src.icons)
        .pipe(changed(dest.icons.rep))
        .pipe(gulp.dest(dest.icons.rep));

    return merge(polices, images, icones);
});


//-- Clean all dist folders
gulp.task('clean:all', () => {
    return gulp.src([
            dest.css.files,
            dest.js.files,
            dest.images.files,
            dest.icons.files,
            dest.fonts.files
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
    gulp.watch('js/*.js', ['scripts']);
    gulp.watch('../*.php').on('change', browserSync.reload);
});


//-- Default
gulp.task('default', ['copy:assets', 'serve']);


//-- Build
gulp.task('build', ['css', 'scripts', 'copy:assets']);

gulp.task('build:infos', ['css', 'scripts:infos', 'copy:assets']);