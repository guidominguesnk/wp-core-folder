<?php
/**
 * Completely remove jQuery from WordPress if not admin and is not connected.
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

function removeJquery() {
  if (
    $GLOBALS['pagenow'] !== 'wp-login.php' &&
    !is_admin() &&
    !is_user_logged_in()
  ) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', false);
  }
}

function remove_jquery_migrate($scripts) {
  if (!is_admin() && isset($scripts->registered['jquery'])) {
    $script = $scripts->registered['jquery'];

    if ($script->deps) {
      $script->deps = array_diff($script->deps, ['jquery-migrate']);
    }
  }
}

function init_disable_jquery() {
  $config = get_config();

  if ($config['disable']['jquery'] === true) {
    add_action('init', __NAMESPACE__ . '\removeJquery');
    add_action('wp_default_scripts', __NAMESPACE__ . '\remove_jquery_migrate');
  }
}

init_disable_jquery();
