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

function init_lib_smooth_scroll() {
  $config = get_config();

  if ($config['enable']['lib']['smooth-scroll']) {
    add_action('wp_enqueue_scripts', function () {
      wp_enqueue_script(
        'smooth-scroll',
        get_theme_file_uri() . '/assets/vendor/smooth-scroll.min.js',
        [],
        '10.2.0',
        true,
      );
    });
  }
}

init_lib_smooth_scroll();
