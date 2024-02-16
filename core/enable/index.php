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

require_once $theme_dir . '/core/enable/aos.php';
require_once $theme_dir . '/core/enable/gsap.php';
require_once $theme_dir . '/core/enable/smooth-scroll.php';
require_once $theme_dir . '/core/enable/svg.php';
require_once $theme_dir . '/core/enable/swiper.php';
require_once $theme_dir . '/core/enable/theme.php';
