<?php
/**
 * Removes WordPress version from <head>.
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

function init_disable_version() {
  $config = get_config();

  if ($config['disable']['version']) {
    remove_action('wp_head', 'wp_generator');
  }
}

init_disable_version();
