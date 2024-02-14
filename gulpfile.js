/**
 * @package WP Core Folder
 * @author Gui Domingues <hello@guidomingues.com>
 * @link https://github.com/guidominguesnk/wp-core-folder
 */

const gulp = require('gulp')
const options = require('./build.config') /* Import paths and other options from config.js. */
const browserSync =
  require('browser-sync').create() /* Create a BrowserSync instance for live reloading. */

/**
 * Initialize live preview using BrowserSync.
 *
 * 1: Initialize BrowserSync with specified proxy and port.
 * 2: Callback function to signal completion.
 */
function livePreview(done) {
  browserSync.init({
    proxy: options.config.proxy /* 1 */,
    port: options.config.port /* 1 */,
  })
  done() /* 2 */
}

/**
 * Reload the browser preview.
 *
 * 1: Log an information message indicating browser reload.
 * 2: Trigger browser reload using BrowserSync.
 * 3: Callback function to signal completion.
 */
function previewReload(done) {
  console.log('\n\t🔄  Reloading browser preview.\n') /* 1 */
  browserSync.reload() /* 2 */
  done() /* 3 */
}

/**
 * Watch for file changes and trigger corresponding tasks.
 *
 * 1: Watch PHP files and trigger devStyles and previewReload tasks.
 * 2: Log an information message indicating watching for changes.
 */
function watchFiles() {
  gulp.watch(['**/*.php'], gulp.series(devStyles, previewReload)) /* 2 */
  console.log('\n\t🔥  Watching for changes...\n') /* 7 */
}

/**
 * Gulp configuration for the default task.
 *
 * 1: Live preview build.
 * 2: Watch for live changes.
 */
exports.default = gulp.series(
  livePreview /* 1 */,
  watchFiles /* 2 */,
)
