const gulp = require("gulp");
const sass = require("gulp-sass");
const sourcemaps = require("gulp-sourcemaps");
const autoprefixer = require("gulp-autoprefixer");
const plumber = require("gulp-plumber");
const c = require("ansi-colors");
const notifier = require("node-notifier");
const rename = require("gulp-rename");
const wait = require("gulp-wait");
const csso = require("gulp-csso");
const browserSync = require("browser-sync").create();
const webpack = require("webpack");


const showError = function (err) {
    //console.log(err.toString());

    // notifier.notify({
    //     title: "Error in sass",
    //     message: err.messageFormatted
    // });

    console.log(c.red("==============================="));
    console.log(c.red(err.messageFormatted));
    console.log(c.red("==============================="));
};

const server = (cb) => {
    browserSync.init({
        server: {
            baseDir: "./"
        },
        notify: false,
        //host: "192.168.0.24",
        //port: 3000,
        open: true,
        //browser: "google chrome"
    });

    cb();
};

const css = function () {
    return gulp.src("src/scss/style.scss")
        .pipe(wait(500))
        .pipe(plumber({
            errorHandler: showError
        }))
        .pipe(sourcemaps.init())
        .pipe(
            sass({
                outputStyle: "expanded" //nested, compressed, compact, compressed
            }).on("error", showError)
        )
        .pipe(autoprefixer())
        .pipe(rename({
            suffix: ".min",
            basename: "style"
        }))
        // .pipe(csso())
        .pipe(sourcemaps.write("."))
        .pipe(gulp.dest("wordpress/wp-content/themes/DENS2/css"))
        .pipe(browserSync.stream({
            match: "**/*.css"
        }));
};

const js = function (cb) { //https://github.com/webpack/docs/wiki/usage-with-gulp#normal-compilation
    return webpack(require("./webpack.config.js"), function (err, stats) {
        if (err) throw err;
        console.log(stats.toString());
        browserSync.reload();
        cb();
    })
};




gulp.task('browser-sync-php', function () {
    connect.server({
        base: './'
    }, function () {
        browserSync({
            proxy: '127.0.0.1:8000',
            notify: false,
            ghostMode: {
                clicks: true,
                location: true,
                forms: true,
                scroll: false
            }
        });
    });


});

const watch = function () {
    gulp.watch("src/scss/**/*.scss", {
        usePolling: true
    }, gulp.series(css));
    gulp.watch("src/js/**/*.js", {
        usePolling: true
    }, gulp.series(js));
    // gulp.watch("src/html/**/*.html", {
    //     usePolling: true
    // }).on("change", browserSync.reload);
    gulp.watch('**/*.php').on('change', function () {
        browserSync.reload();
    });
};


exports.default = gulp.series(css, js, server, watch);
exports.css = css;
exports.watch = watch;
exports.js = js;