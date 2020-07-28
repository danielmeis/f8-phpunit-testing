<?php

use \WP_Mock\Tools\TestCase;
use F8\phpunit_testing\template;


class Safely_include_template extends TestCase {
  /**
   * @test #safely_include(): checking to see if it will return the contents of my template file
   */
  function should_return_the_template() {
    $safely_included_template = F8\phpunit_testing\template\safely_include(F8_FIELDS_TEMPLATE_PATH . '/tests/test-data/rendertest.php', $args = null);
    $this->assertEquals('<h1>Well hello there!</h1>
', $safely_included_template);
  }

  /**
   * @test #safely_include(): Now when I pass it an invalid file name, I should get an empty string
   */
  function should_return_an_empty_string() {
    $safely_included_nonsense = F8\phpunit_testing\template\safely_include(F8_FIELDS_TEMPLATE_PATH . 'templates/nonsense.php', $args = null);
    $this->assertEquals('', $safely_included_nonsense);
  }
}
