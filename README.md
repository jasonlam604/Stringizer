# Stringizer
Stringizer is a standalone String Utility Library

[![Build Status](https://travis-ci.org/jasonlam604/Stringizer.svg?branch=master)](https://travis-ci.org/jasonlam604/Stringizer) [![Coverage Status](https://coveralls.io/repos/github/jasonlam604/Stringizer/badge.svg?branch=master)](https://coveralls.io/github/jasonlam604/Stringizer?branch=master) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/de25b7db-2be0-4e1a-a3e5-806767ea0438/mini.png)](https://insight.sensiolabs.com/projects/de25b7db-2be0-4e1a-a3e5-806767ea0438)

* [Overview](#overview)
* [Status](#status)
* [Installation](#installation)
* [Tests](#tests)
* [Contributing](#contributing)
* [Credits](#credits)
* [License](#license)
* [Available functions](#functions)
      * [Camelize](#camelize)

## Overview

Stringizer is a stringer helper that is made up of existing PHP multibyte-string functions and a variety of  string manipulation solutions found on Stackoverflow.com.

## Status

Release 1.0.0

## Installation

It's recommended that you use [Composer](https://getcomposer.org/) to install Stringizer.

Manual install with composer

```bash
$ composer require jasonlam604/stringizer "^1.0.0"
```

Using the composer.json file

```json
"require": {
    "jasonlam604/stringizer": "^1.0.0"
}
```

This will install Stringizer and all required dependencies. Stringizer requires PHP 5.6.0 or newer.

## Usage

Sample usage:

```php
<?php

require 'vendor/autoload.php';

$s = new Stringizer("こんにちは世界");

$s->ensureRight(" さようなら");

// The following outputs: こんにちは世界 さようなら

echo $s->getString(); 

```

## Tests

To execute the test suite, you'll need phpunit.

```bash
$ phpunit
```

## Contributing

Accepting Pull-Requests!

## Credits

- [Jason Lam](https://github.com/jasonlam604)

## License

The Stringizer is licensed under the MIT license. See [License File](LICENSE.md) for more information.


## Functions

##### camelize()

Removes any underscores or dashes and converts a string into camel case.

$s = new Stringizer("data_rate");
$s->camelize(); // dataRate

