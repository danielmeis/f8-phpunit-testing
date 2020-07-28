<?php

namespace F8\phpunit_testing\template;

/**
 * Include file if it exists
 *
 * @param  String $filepath     The path to a file.
 * @param  Array  $args         Optional variables to pass to template.
 *
 * @return void
 */
function safely_include($filepath, $data = null) {
  // extract variables from associative array to make them easier to access
  if ( is_array($data) ) {
    // create variable from $data
    extract($data);
  }

  ob_start();
  if ( file_exists($filepath) ) {
    include $filepath;
  }
  else {
    error_log('Template error: ' . $filepath . ' does not exist!');
  }
  return ob_get_clean();
}
