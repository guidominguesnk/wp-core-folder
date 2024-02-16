<?php
/**
 * @package WP Core Folder
 * @author Gui Domingues <hello@guidomingues.com>
 * @link https://github.com/guidominguesnk/wp-core-folder
 */

if (!defined('ABSPATH')) {
  exit(); /* Exit if accessed directly. */
}

$theme_dir = get_template_directory();

require_once $theme_dir . '/core/index.php';

function init_lib_gsap() {
  $config = get_config();
  if ($config['enable']['lib']['gsap']['gsap']) {
    add_action('wp_enqueue_scripts', function () {
      wp_enqueue_script(
        'gsap',
        get_theme_file_uri() . '/vendor/gsap/gsap.min.js',
        [],
        '3.12.2',
        true,
      );
    });
  }
  if ($config['enable']['lib']['gsap']['scroll-trigger']) {
    add_action('wp_enqueue_scripts', function () {
      wp_enqueue_script(
        'gsap-scroll-trigger',
        get_theme_file_uri() . '/vendor/gsap/scroll-trigger.min.js',
        [],
        '3.12.2',
        true,
      );
    });
  }
}

init_lib_gsap();
