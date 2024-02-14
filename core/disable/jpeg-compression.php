<?php
/**
 * Removes JPEG compression.
 *
 * @package WP Core Folder
 * @author Gui Domingues <hello@guidomingues.com>
 * @link https://github.com/guidominguesnk/wp-core-folder
 */

if (!defined('ABSPATH')) {
  exit(); /* Exit if accessed directly */
}

$theme_dir = get_template_directory();

require_once $theme_dir . '/core/index.php';

function init_disable_jpeg_compression() {
  $config = get_config();

  if ($config['disable']['jpeg-compression']) {
    add_filter(
      'jpeg_quality',
      function () {
        return 100;
      },
      10,
      2,
    );
  }
}

init_disable_jpeg_compression();
