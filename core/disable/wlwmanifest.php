<?php
/**
 * Removes wlwmanifest.xml.
 *
 * @package WP Core Folder
 * @author Gui Domingues <hello@guidomingues.com>
 * @link https://github.com/guidominguesnk/wp-core-folder
 */

if (!defined('ABSPATH')) {
  exit(); /* Exit if accessed directly */
}

require_once dirname(__FILE__) . '/../index.php';

function init_disable_wlwmanifest() {
  $config = get_config();

  if ($config['disable']['wlwmanifest']) {
    remove_action('wp_head', 'wlwmanifest_link');
  }
}

init_disable_wlwmanifest();
