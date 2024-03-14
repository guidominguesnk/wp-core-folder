<?php
/**
 * @package WP Core Folder
 * @author Gui Domingues <hello@guidomingues.com>
 * @link https://github.com/guidominguesnk/wp-core-folder
 */

if (!defined('ABSPATH')) {
  exit(); // Exit if accessed directly.
}

/**
 * 1: Enable menu management.
 * 2: Enable the option for a custom logo.
 * 3: Enable dynamic title support.
 * 4: Enable default posts and comments RSS feed links to head.
 * 5: Enable support for Post Thumbnails on posts and pages.
 * 6: Enable responsive embedded content.
 * 7: Enable support for editor styles.
 */

require_once CORE_THEME_DIR . 'core/index.php';

function init_theme() {
  $config = get_config();

  if ($config['enable']['theme']['menus']) {
    add_theme_support('menus'); /* 1 */
  }

  if ($config['enable']['theme']['custom-logo']) {
    add_theme_support('custom-logo'); /* 2 */
  }

  if ($config['enable']['theme']['title-tag']) {
    add_theme_support('title-tag'); /* 3 */
  }

  if ($config['enable']['theme']['automatic-feed-links']) {
    add_theme_support('automatic-feed-links'); /* 4 */
  }

  if ($config['enable']['theme']['post-thumbnails']) {
    add_theme_support('post-thumbnails'); /* 5 */
  }

  if ($config['enable']['theme']['responsive-embeds']) {
    add_theme_support('responsive-embeds'); /* 6 */
  }

  if ($config['enable']['theme']['editor-styles']) {
    add_theme_support('editor-styles'); /* 7 */
  }
}

init_theme();
