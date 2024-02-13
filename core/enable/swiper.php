<?php
/**
 * @package WP Core Folder
 * @author Gui Domingues <hello@guidomingues.com>
 * @link https://github.com/guidominguesnk/wp-core-folder
 */

if (!defined('ABSPATH')) {
  exit(); /* Exit if accessed directly */
}

require_once dirname(__FILE__) . '/../index.php';

function init_lib_aos() {
  $config = get_config();

  if ($config['enable']['lib']['aos']) {
    add_action('wp_enqueue_scripts', function () {
      wp_enqueue_script(
        'swiper-bundle',
        get_theme_file_uri() . '/assets/vendor/swiper/swiper-bundle.min.js',
        [],
        '10.2.0',
        true,
      );
      wp_enqueue_style(
        'swiper-bundle',
        get_theme_file_uri() . '/assets/vendor/swiper/swiper-bundle.min.css',
        [],
        '10.2.0',
      );
    });
  }
}

init_lib_aos();
