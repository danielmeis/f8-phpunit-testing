<?php

require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

WP_Mock::setUsePatchwork(true);
WP_Mock::bootstrap();

/**
 * Include any plugin files that we need to be able to run tests on.
 */

define( 'F8_FIELDS_TEMPLATE_PATH', dirname(__FILE__, 2) . '/');
define( 'F8_FIELDS_TEMPLATE_INC', F8_FIELDS_TEMPLATE_PATH . 'includes/');

require_once F8_FIELDS_TEMPLATE_INC . 'template.php';
