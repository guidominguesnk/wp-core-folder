<?php
/**
 * Removes block library styles.
 *
 * @package WP Core Folder
 * @author Gui Domingues <hello@guidomingues.com>
 * @link https://github.com/guidominguesnk/wp-core-folder
 */

if (!defined('ABSPATH')) {
  exit(); // Exit if accessed directly.
}

require_once CORE_THEME_DIR . 'core/index.php';

function init_disable_block_library() {
  $config = get_config();

  if ($config['disable']['block-library']) {
    add_action('wp_enqueue_scripts', function () {
      wp_dequeue_style('wp-block-library');
    });
  }
}

init_disable_block_library();
