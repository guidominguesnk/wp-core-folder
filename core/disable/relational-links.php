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

function init_disable_relational_links() {
  $config = get_config();
  if ($config['disable']['relational-links']) {
    // Removes relational links for the posts.
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
  }
}

init_disable_relational_links();
