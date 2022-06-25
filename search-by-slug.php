<?php
/**
 * Plugin Name:  Search by slug
 * Description: This plugin allows you to search post/pages/post_types by slug inside admin area .
 * Version: 1.0
 * Author: Ashot Hovhannisyan
 * License: GPLv3
 * Text Domain:  Search
 */

if (!defined('WPINC')) die;

if (!defined('AHPL_FILE_NAME'))
    define('AHPL_FILE_NAME', plugin_basename(__FILE__));

if (!defined('AHPL_PATH'))
    define('AHPL_PATH', WP_PLUGIN_DIR . '/' . plugin_basename(dirname(__FILE__)) .'/');

require_once(dirname(__FILE__).'/AHPLInitialize.php');