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

require_once $theme_dir . '/core/disable/block-library.php';
require_once $theme_dir . '/core/disable/comment.php';
require_once $theme_dir . '/core/disable/emoji.php';
require_once $theme_dir . '/core/disable/feed.php';
require_once $theme_dir . '/core/disable/generated-icons.php';
require_once $theme_dir . '/core/disable/global-styles.php';
require_once $theme_dir . '/core/disable/jpeg-compression.php';
require_once $theme_dir . '/core/disable/jquery.php';
require_once $theme_dir . '/core/disable/media.php';
require_once $theme_dir . '/core/disable/oembed.php';
require_once $theme_dir . '/core/disable/rest-api.php';
require_once $theme_dir . '/core/disable/rest-user.php';
require_once $theme_dir . '/core/disable/shortlink.php';
require_once $theme_dir . '/core/disable/version.php';
require_once $theme_dir . '/core/disable/wlwmanifest.php';
require_once $theme_dir . '/core/disable/xmlrpc.php';
