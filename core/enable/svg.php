<?php
/**
 * Enable SVG support.
 *
 * @package WP Core Folder
 * @author Gui Domingues <hello@guidomingues.com>
 * @link https://github.com/guidominguesnk/wp-core-folder
 */

if (!defined('ABSPATH')) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . 'core/index.php';

function init_enable_svg() {
  $config = get_config();

  if ($config['enable']['svg']) {
    add_filter('upload_mimes', function () {
      $mimes['svg'] = 'image/svg+xml';

      return $mimes;
    });
  }
}

init_enable_svg();
