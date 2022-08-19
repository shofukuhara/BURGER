const { src, dest, watch } = require("gulp");
const loadPlugins = require("gulp-load-plugins");
const $ = loadPlugins();
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("autoprefixer");
const browserSync = require("browser-sync");
const server = browserSync.create();

const pug = require("gulp-pug");
const html = require("gulp-html-beautify");

function pugCompile() {
  return src("./src/pug/*.pug")
  .pipe(pug())
  .pipe(dest("./dist/html"));
}

function style() {
  return src("./src/sass/pages/*.scss")
    .pipe($.sourcemaps.init())
    .pipe(sass())
    .pipe($.postcss([autoprefixer()]))
    .pipe($.sourcemaps.write("."))
    .pipe(dest("./dist/css"));
}

function serve() {
  server.init({
    server: {
      baseDir: "./",
    },
    startPath: "top.html",
  });
  watch("./src/sass/**/*.scss", style);
  watch("./src/sass/**/*.scss").on("change", server.reload);
}

exports.pug = pug;
exports.style = style;
exports.serve = serve;
