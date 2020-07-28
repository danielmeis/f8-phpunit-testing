<?php
/**
 * Plugin Name: F8 PHPUNIT Testing
 * Description: Base, mostly empty WordPress Plugin for PHPUNIT testing setup under PHP 7.2.
 * Author: Meis Media
 * Author URI: http://www.meismedia.com/
 * Version: 1.0.0
 * License: MIT
 */

// if this file is called directly, exit
if ( ! defined( 'ABSPATH' ) ) exit;

define( 'F8_FIELDS_TEMPLATE_PATH', dirname(__FILE__) . '/' );
define( 'F8_FIELDS_TEMPLATE_INC', F8_FIELDS_TEMPLATE_PATH . 'includes/');

require_once F8_FIELDS_TEMPLATE_INC . 'template.php';
