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
* [Documentation and User Guide](#functions)
      * [Camelize](#camelize)
      * [Concat](#concat)
      * [Contains](#contains)
      * [Contains Count](#containsCount)
      * Contains Count Incase-sensitive
      * Dasherize
      * EndsWith
      * StartsWith
      * EnsureLeft
      * EnsureRight
      * HashCode
      * IndexOf
      * IndexOf Incase-sensitive
      * Empty
      * LastIndexOf
      * LastIndex Incase-sensitive
      * Length
      * Lowercase
      * Lowercase First
      * Pad Both
      * Pad Left
      * Pad Right
      * Remove Accents
      * Remove Non Ascii
      * Remove Whitespace
      * Replace
      * Replace Incase-sensitive
      * Reverse
      * Split
      * Strip Punctuation
      * Strip Tags
      * Sub String
      * Trim
      * Trim Left
      * Trim Right
      * Truncate
      * Truncate Match
      * Truncate Match Incase-sensitive
      * Uppercase
      * Uppercase Words
      * Width

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

```php
$s = new Stringizer("data_rate");
$s->camelize(); // dataRate
```

##### concat

Combine string values.

Combine at end of the string.

```php
$s = new Stringizer("fizz");
$s->concat(" buzz") // fizz buzz
```

Combine at the beginning of the string by passing in the boolean value **true** in the *optional* second parameter.
```php
$s = new Stringizer(" buzz");
$s->concat("fizz",true) // fizz buzz
```
##### contains

Search for string within another string, return true if found else return false

```php
$s = new Stringizer("fizz buzz foo bar");
$s->contains("buzz"); // true
```

```php
$s = new Stringizer("fizz buzz foo bar");
$s->contains("Buzz"); // false, case sensitive
```

```php
$s = new Stringizer("fizz buzz foo bar");
$s->containsIncaseSensitive("Buzz"); // true, case insensitive
```

##### containsCount

Count the number of string occurrences

```php
$s = new Stringizer("fizz buzz fizz buzz fizz buzz");
$s->containsCount("buzz"); // 3
```

```php
$s = new Stringizer("fizz buzz fizz buzz fizz buzz");
$s->containsCount("nomatch"); // 0
```

```php
$s = new Stringizer("fizz buzz foo bar");
$this->assertEquals(0, $s->containsCount("BUZZ")); // 0, case sensitive no match found
```

```php
$s = new Stringizer("fizz buzz foo bar");
$s->containsCountIncaseSensitive("BUZZ"); // 1, case in-sensitive 1 match found
```

```php
$s = new Stringizer("文字列のそれ 文字列のそれ 文字列のそれ 文字列のそれ");
$this->assertEquals(4, $s->containsCount("れ")); // 4
```

