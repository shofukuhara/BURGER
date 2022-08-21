const { src, dest, watch } = require("gulp");
const loadPlugins = require("gulp-load-plugins");
const $ = loadPlugins();
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("autoprefixer");
const browserSync = require("browser-sync");
const server = browserSync.create();
const image = require("gulp-imagemin");
const pug = require("gulp-pug");
const html = require("gulp-html-beautify");

function imgMin() {
  return src("./src/img/**").pipe($.imagemin()).pipe(dest("./dist/img"));
}

function pugCompile() {
  return src("./src/pug/*.pug")
    .pipe(pug())
    .pipe(
      html({
        indent_size: 2,
        indent_char: " ",
        max_preserve_newlines: 0,
        preserve_newlines: false,
        extra_liners: [],
      })
    )
    .pipe(dest("./dist/html"))
    .pipe(dest("./src/html"));
}

function style() {
  return src("./src/sass/pages/*.scss")
    .pipe($.sourcemaps.init())
    .pipe(sass())
    .pipe($.postcss([autoprefixer()]))
    .pipe($.sourcemaps.write("."))
    .pipe(dest("./dist/css"))
    .pipe(dest("./src/css"));
}

function serve() {
  server.init({
    server: {
      baseDir: "./",
    },
    startPath: "./src/html/top.html",
  });
  watch("./src/sass/**/*.scss", style);
  watch("./src/sass/**/*.scss").on("change", server.reload);
  watch("./src/pug/**/*.pug", pugCompile);
  watch("./src/pug/**/*.pug").on("change", server.reload);
}

exports.image = imgMin;
exports.pug = pugCompile;
exports.style = style;
exports.serve = serve;
