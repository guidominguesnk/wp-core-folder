/**
 * @package WP Core Folder
 * @author Gui Domingues <hello@guidomingues.com>
 * @link https://github.com/guidominguesnk/wp-core-folder
 */

const gulp = require('gulp')
const browserSync = require('browser-sync').create() /* Create a BrowserSync instance for live reloading. */
const logSymbols = require('log-symbols') /* Display symbolic console logs. */

/* Load previews on the browser during development. */
function livePreview(done) {
  browserSync.init({
    proxy: 'core.local',
    port: 3333,
  })
  done()
}

/* Triggers browser reload. */
function previewReload(done) {
  console.log(`\n\t${logSymbols.info}`, 'Reloading browser preview.\n')
  browserSync.reload()
  done()
}

/* Watch for file changes. */
function watchFiles() {
  gulp.watch(['**/*.php'], gulp.series(previewReload))
  console.log(`\n\t${logSymbols.info}`, 'Watching for changes...\n')
}

/* Define the default task. */
exports.default = gulp.series(
  livePreview, /* Live preview build. */
  watchFiles, /* Watch for live changes. */
)
