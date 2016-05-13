# Stringizer
Stringizer is a standalone String Utility Library

[![Build Status](https://travis-ci.org/jasonlam604/Stringizer.svg?branch=master)](https://travis-ci.org/jasonlam604/Stringizer) [![Coverage Status](https://coveralls.io/repos/github/jasonlam604/Stringizer/badge.svg?branch=master)](https://coveralls.io/github/jasonlam604/Stringizer?branch=master) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/de25b7db-2be0-4e1a-a3e5-806767ea0438/mini.png)](https://insight.sensiolabs.com/projects/de25b7db-2be0-4e1a-a3e5-806767ea0438)
[![Latest Stable Version](https://poser.pugx.org/jasonlam604/stringizer/v/stable)](https://packagist.org/packages/jasonlam604/stringizer) [![License](https://poser.pugx.org/jasonlam604/stringizer/license)](https://packagist.org/packages/jasonlam604/stringizer)

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
      * [Contains & Contains Case-Insensitive](#contains)
      * [Contains Count & Count Case-Insensitive](#containscount)
      * [Dasherize](#dasherize)
      * [EndsWith](#endswith)
      * [StartsWith](#startswith)
      * [EnsureLeft](#ensureleft)
      * [EnsureRight](#ensureright)
      * [HashCode](#hashcode)
      * [IndexOf & IndexOf Case-Insensitive](#indexof)
      * [IsEmpty](#isempty)
      * [LastIndexOf & LastIndexOf Case-Insensitive](#lastindexof)
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

##### camelize

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

##### dasherize

Break up a camelize string and seperate with dashes

```php
$s = new Stringizer("dataRate");
$s->dasherize(); // data-rate
```

##### endsWith

Checks if a string ends with the given suffix.

```php  
$s = new Stringizer("Fizz Buzz");
$s->endsWith("zz"); // true
```

```php
$s = new Stringizer("文字列のそれ");
$s->endsWith("れ"); // true
```  
 
```php     
$s = new Stringizer("文字列のそれ");
$s->endsWith("れれれれ"); // false
```     

##### startsWith

Checks if a string starts with the specified suffix.

```php        
$s = new Stringizer("Fizz Buzz");
$s->startsWith("Fizz B"); // true
```

```php
$s = new Stringizer("文字列のそれ");
$s->startsWith("文"); // true
```

```php        
$s = new Stringizer("文字列のそれ");
$s->startsWith("文文文文"); // false
```

##### ensureLeft

Ensure string starts with prefix

```php  
$s = new Stringizer("/myapp");
$s->ensureLeft("/"); //  /myapp
```

##### ensureRight

Ensure string ends with suffix

```php  
$s = new Stringizer("/myapp");
$s->ensureRight("/"); //  /myapp/
```

##### hashCode

Determine the hashcode of a string, algorithm matches the hashCode method available in a Java String class

```php  
$s = new Stringizer("Hello, World");
$s->hashCode(); // -505841268
```
##### indexOf

Finds position of first occurrence of a string within another.

```php  
$s = new Stringizer("Fizz Buzz Foo Bar");
$s->indexOf("Foo"); // 10
```

If no match is found boolean false is returned.

```php  
$s = new Stringizer("Fizz Buzz Foo Bar");
$s->indexOf("bad"); // false
```

There is a second optional parameter, position offset where to begin the search where left most value is index 0.

```php  
$s = new Stringizer("Foo Buzz Foo Bar");
$s->indexOf("Foo", 0); // 0, since offset starts at zero the first Foo is found at index 0
$s->indexOf("Foo", 1); // 9, since offset is past zero the next available match is at index 9
```

MultiByte

```php  
$s = new Stringizer("fòô bàř");
$s->indexOf("bàř"); // 4
```

Case In-sensitive

```php
$s = new Stringizer("Fizz Buzz Foo Bar");
$s->indexOfCaseInsensitive("foo"); // 10
```

##### isEmpty

Checks if value is empty, if string contains whitespace only it is considered empty.

```php
$s = new Stringizer("\n  \n\r\t   ");
$s->isEmpty(); // true
```

#### lastIndexOf

Finds position of last occurrence of a string within another

```php
$s = new Stringizer("Foo Buzz Foo Bar");
$s->lastIndexOf("Foo"); // 9
```

If no match is found boolean false is returned.

```php
$s = new Stringizer("Fizz Buzz Foo Bar");
$s->lastIndexOf("bad"); // false
```

There is a second optional parameter, position offset where to begin the search where left most value is index 0.

```php
$s = new Stringizer("Foo Buzz Foo Bar");
$s->lastIndexOf("Foo", 0); // 9 
$s->lastIndexOf("Foo", 4)); // 9
$s->lastIndexOf("Foo", 10)); // false
```

MultiByte

```php
$s = new Stringizer("fòô bàř fòô bàř fòô bàř");
$s->lastIndexOf("fòô"); // 16
```

Case In-sensitive

```php
$s = new Stringizer("Fizz Buzz Foo Bar");
$s->lastIndexOf("foo"); //false
$s->lastIndexOfCaseInsensitive("foo"); // 10
```






