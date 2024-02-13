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
  exit(); /* Exit if accessed directly */
}

function get_config() {
  /* Default values */
  $default = include dirname(__FILE__) . '/default.php';

  /* Theme values */
  $global = include dirname(__FILE__) . '/../config/global.php';

  /* Override default value */
  return array_replace_recursive($default, $global);
}
