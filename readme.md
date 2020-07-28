# Introduction

Base setup for WordPress PHPUnit Testing.
Composer install versions are based off of a use case with PHP 7.2

# Reference Guide

Resources:
[xDebug](https://xdebug.org/) is required inorder to run unit testing.
[PHPUnit 8.5.8](https://phpunit.de/)
[PHP Code Coverage](https://github.com/sebastianbergmann/php-code-coverage)

## Unit Testing using PHPUnit

### Installing PHPUnit 8
[PHPUNIT Link](https://phpunit.de/getting-started/phpunit-8.html)

Assuming xDebug is installed as part of your PHP build,
login to the VM and cd into the root of this plugin:
`% cd /var/www/html/wp-content/plugins/f8-phpunit-testing/`

Use Composer to install PHPUnit 8:
`% sudo composer install`

Make sure PHPUnit installed correctly:
`% ./vendor/bin/phpunit --version`
It should return something along the lines of:
`PHPUnit 8.5.8 by Sebastian Bergmann and contributors.`

### Running Tests
`% ./vendor/bin/phpunit --testdox`

### Code Coverage
PHPunit uses xdebug to create coverage reports, we only have this installed in our development environments and may not function in other VMs not built by Meis Media.

Generate a coverage report:
The parent directly is defined in `phpunit.xml`.
If the build has `node_modules` you will either need to add `node_modules` to the excluded directories or set the parent directly a level down such as includes.

`% sudo ./vendor/bin/phpunit --coverage-html ./tests/coverage`

To view a coverage report, open the index.html file you just created
in `wp-content/plugins/f8-custom-fields/tests/coverage/index.html` in a browser of your choice.
