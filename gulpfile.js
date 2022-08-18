const { src, dest, watch } = require("gulp");
const loadPlugins = require("gulp-load-plugins");
const $ = loadPlugins();
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("autoprefixer");
const browserSync = require("browser-sync");
const server = browserSync.create();

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
      baseDir: "./dist",
    },
  });
  watch("./src/sass/pages/*.scss", style);
  watch("./src/sass/pages/*.scss").on("change", server.reload);
}
exports.style = style;
exports.serve = serve;
