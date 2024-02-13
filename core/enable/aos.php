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

function init_lib_swiper() {
  $config = get_config();

  if ($config['enable']['lib']['swiper']) {
    add_action('wp_enqueue_scripts', function () {
      wp_enqueue_script(
        'aos',
        get_theme_file_uri() . '/assets/vendor/aos/aos.min.js',
        [],
        '2.3.1',
        true,
      );
      wp_enqueue_style(
        'aos',
        get_theme_file_uri() . '/assets/vendor/aos/aos.min.css',
        [],
        '2.3.1',
      );
    });
  }
}

init_lib_swiper();
