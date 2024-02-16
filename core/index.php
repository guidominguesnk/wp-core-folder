<?php
/**
 * Return config global.
 *
 * @package WP Core Folder
 * @author Gui Domingues <hello@guidomingues.com>
 * @link https://github.com/guidominguesnk/wp-core-folder
 *
 * @return array
 */

if (!defined('ABSPATH')) {
  exit(); /* Exit if accessed directly. */
}

function get_config() {
  $theme_dir = get_template_directory();

  /* Default values. */
  $default = include $theme_dir . '/core/config/default.php';

  /* Theme values. */
  $global = include $theme_dir . '/core/config/index.php';

  /* Override default values. */
  return array_replace_recursive($default, $global);
}
