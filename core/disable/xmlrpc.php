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

function init_disable_xmlrpc() {
  $config = get_config();

  if ($config['disable']['xmlrpc']) {
    // Disable XML RPC for security.
    add_filter('xmlrpc_enabled', '__return_false');
    add_filter('xmlrpc_methods', '__return_false');
    // Removes Really Simple Discovery link.
    remove_action('wp_head', 'rsd_link');
  }
}

init_disable_xmlrpc();
