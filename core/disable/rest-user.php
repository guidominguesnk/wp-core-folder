<?php
/**
 * Disable default users API endpoints for security. (https://www.wp-tweaks.com/hackers-can-find-your-wordpress-username/)
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

function init_disable_rest_user() {
  $config = get_config();

  if ($config['disable']['rest-user']) {
    function disable_rest_endpoints(array $endpoints): array {
      if (!is_user_logged_in()) {
        if (isset($endpoints['/wp/v2/users'])) {
          unset($endpoints['/wp/v2/users']);
        }

        if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
          unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
        }
      }

      return $endpoints;
    }

    add_filter('rest_endpoints', __NAMESPACE__ . '\disable_rest_endpoints');
  }
}

init_disable_rest_user();
