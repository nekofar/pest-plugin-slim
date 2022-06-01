# Changelog
All notable changes to this project will be documented in this file.

## [2.0.1] - 2022-06-01

### Documentation

- Update php version over readme file

## [2.0.0] - 2022-04-14

### Miscellaneous Tasks

- Update `config.allow-plugins` on the `composer` configs
- Remove support for php version `7.*`
- Update `git-cliff` configurations

## [1.2.2] - 2022-03-27

### Documentation

- Improve the dependabot configuration file

### Miscellaneous Tasks

- Bump actions/cache from 2.1.6 to 2.1.7
- Update github funding configs
- Solve github funding broken link issue
- Bump orhun/git-cliff-action from 1.1.5 to 1.1.6
- Bump shivammathur/setup-php from 2.17.1 to 2.18.0

## [1.2.1] - 2021-11-28

### Miscellaneous Tasks

- Bump shivammathur/setup-php from 2.15.0 to 2.16.0
- Reduce rules level on phpstan configs

## [1.2.0] - 2021-11-28

### Miscellaneous Tasks

- Bump actions/checkout from 2.3.5 to 2.4.0
- Drop support for php version 7.3

## [1.1.5] - 2021-10-06

### Miscellaneous Tasks

- Update `slim/test` requirements to ^1.1
- Update `nekofar/dev-tools` requirements to ^1.3
- Downgrade `nekofar/dev-tools` requirements to ^1.1

## [1.1.4] - 2021-09-26

### Documentation

- Replace markdawn license file by a text file

### Miscellaneous Tasks

- Ignore `git-cliff` configs file from export

## [1.1.3] - 2021-09-22

### Documentation

- Add downloads badge linked to packagist
- Add target branch to dependabot configuration file
- Add commit message scop to dependabot configuration file
- Improve the dependabot configuration file

### Miscellaneous Tasks

- Add `roave/security-advisories` package dev-latest
- Replace `standard-version` by `git-cliff` for generate changelog

## [1.1.2] - 2021-09-16

### Documentation

- Change format of description

### Miscellaneous Tasks

- Replace required dev packages by `nekofar/dev-tools`
- Remove useless includes from phpstan config file

### Testing

- Improve bootstrap routes and update tests

## [1.1.1] - 2021-09-14

### Documentation

- Add new template for pull requests
- Add new dependabot configuration file
- Add missing function import on sample code

### Miscellaneous Tasks

- Upgrade nekofar/slim-test package to ^1.0.2

### Testing

- Make sure given array is subset of response json

## [1.1.0] - 2021-09-08

### Documentation

- Add new section for usage instruction

### Features

- Add new withToken function to add an authorization token for the request

### Miscellaneous Tasks

- Remove slim/slim package
- Remove slim/psr7 package
- Remove php-di/slim-bridge package
- Remove selective/test-traits package
- Change namespaces over composer configs
- Add nekofar/slim-php package ^1.0@beta
- Remove useless classes and traits
- Add php-di/slim-bridge package ^3.1

### Refactor

- Cleanup and improve autoload file
- Separate testing functionality
- Replace test case by bootstrap in resources

### Testing

- Rename tests name space over pest config
- Change base test case over the tests test case class
- Rename namespaces over functions
- Cleanup and improve functions tests

## [1.0.0] - 2021-09-06

### Bug Fixes

- Solve missing json method issue by increase pest min version
- Change wrong request method on options method

### Documentation

- Add some basic information
- Update badges links and icons
- Add new badge for tests workflow status

### Features

- Add app test trait include setup app method
- Add http methods test trait
- Add functions for http methods

### Miscellaneous Tasks

- Update github sopncor confiquration
- Update license file header
- Update composer package name and descriptions
- Update plugin name all over boilerplate files
- Normalize composer configuation
- Add selective/test-traits package
- Add the config file for standard version
- Add standard version config file to export ignores
- Add slim/slim package
- Change minimum php version to 7.4
- Add slim/psr7 package
- Add new namespace for test classes
- Move slim/slim package to dev packages
- Move slim/psr7 package to dev packages
- Add php-di/slim-bridge package
- Ignore composer phar file
- Change skip status of tags on standard version config
- Add roave/security-advisories package

### Refactor

- Cleanup autoload from boilerplate codes
- Remove useless example boilerplate files
- Remove return value from set up app on app test trait
- Cleanup useless skeleton codes and boilderplate files
- Solve some type issues over test case
- Solve some type issues over test functions
- Simplify sending requests with headers
- Add a test response class with mixin of response
- Add useful assertions to the test response
- Replace response interface with test response
- Add new assertions for response headers
- Add new assertion for checking no content
- Add new abstract test case and wrap traits
- Add new http headers test trait and its helper functions
- Cleanup assert header on test response
- Solve some issues detected by static analysis

### Styling

- Add missing types for autoload functions iterable argument types
- Add missing declare strict types on http methods test

### Testing

- Add the pest configuration file
- Add test case and some basic tests
- Remove boilerplate codes from functions
- Simplify test case by combine everything in setup
- Change the type of test case to abstract
- Update tests with new implemented assertions
- New tests for new assertions in test response
- Can assert on response no content
- Replace phpunit test case by plugin test case
- Can request with header and get response headers
- Can send a request with multiple headers at once
- Improve the test description over functions

<!-- generated by git-cliff -->
