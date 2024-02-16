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

function init_disable_shortlink() {
  $config = get_config();

  if ($config['disable']['shortlink']) {
    /* Removes shortlink tag from <head>. */
    remove_action('wp_head', 'wp_shortlink_wp_head', 10);

    /* Removes shortlink tag from HTML headers. */
    remove_action('template_redirect', 'wp_shortlink_header', 11);
  }
}

init_disable_shortlink();
