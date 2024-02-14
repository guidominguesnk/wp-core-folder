<?php
/**
 * @package WP Core Folder
 * @author Gui Domingues <hello@guidomingues.com>
 * @link https://github.com/guidominguesnk/wp-core-folder
 */

if (!defined('ABSPATH')) {
  exit(); /* Exit if accessed directly */
}

$theme_dir = get_template_directory();

require_once $theme_dir . '/core/index.php';

function init_lib_swiper() {
  $config = get_config();

  if ($config['enable']['lib']['swiper']) {
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

init_lib_swiper();
