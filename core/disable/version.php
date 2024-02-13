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

require_once dirname(__FILE__) . '/../index.php';

function init_disable_version() {
  $config = get_config();

  if ($config['disable']['version']) {
    remove_action('wp_head', 'wp_generator');
  }
}

init_disable_version();
