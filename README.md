<!--
  Title: Stringizer
  Description: Stringizer is a PHP string manipulation library with support for method chaining and multibyte handling
  Author: jasonlam604
  -->
<meta name='keywords' content='string,manipulation,chaining,multibyte,php,transformer,stringizer'>  
# Stringizer
Stringizer is a PHP string manipulation library with support for method chaining and multibyte handling

[![Build Status](https://travis-ci.org/jasonlam604/Stringizer.svg?branch=master)](https://travis-ci.org/jasonlam604/Stringizer) [![Coverage Status](https://coveralls.io/repos/github/jasonlam604/Stringizer/badge.svg?branch=master)](https://coveralls.io/github/jasonlam604/Stringizer?branch=master) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/de25b7db-2be0-4e1a-a3e5-806767ea0438/mini.png)](https://insight.sensiolabs.com/projects/de25b7db-2be0-4e1a-a3e5-806767ea0438)
[![Latest Stable Version](https://poser.pugx.org/jasonlam604/stringizer/v/stable)](https://packagist.org/packages/jasonlam604/stringizer) [![License](https://poser.pugx.org/jasonlam604/stringizer/license)](https://packagist.org/packages/jasonlam604/stringizer)

* [Overview](#overview)
* [Key Highlights](#key-highlights)
* [Version](#version)
* [Installation](#installation)
* [Tests](#tests)
* [Submitting Bugs / Issues](#submit-issues)
* [Contributing](#contributing)
* [Credits](#credits)
* [License](#license)

**Basic Functions**

* [String Setter](#setstring)
* [String Getter](#getstring)
* [String Orginal Value Getter](#getstringoriginal)
* [PHP built in toString](#__tostring)
* [Encoding Setter](#setencoding)
* [Encoding Getter](#getencoding)

**String Functions**
* [Base64Encode](#base64decode)
* [Base64Decode](#base64encode)
* [Between](#between)
* [Camelize](#camelize)
* [CamelToSnake](#cameltosnake)
* [CharAt](#charat)
* [Chars](#chars)
* [ChompLeft - deprecated](#chompleft)
* [ChompRight - deprecated](#chompright)
* [ChopLeft](#chopleft)
* [ChopRight](#chopright)
* [CollapseWhitespace](#collapsewhitespace)
* [Concat](#concat)
* [Contains & Contains Case-Insensitive](#contains)
* [Contains Count & Count Case-Insensitive](#containscount)
* [Dasherize](#dasherize)
* [EndsWith](#endswith)
* [EnsureLeft](#ensureleft)
* [EnsureRight](#ensureright)
* [First](#first)
* [HasLowerCase](#haslowercase)
* [HasUpper](#hasuppercase)
* [HashCode](#hashcode)
* [IndexOf & IndexOf Case-Insensitive](#indexof)
* [IsAscii](#isascii)
* [IsAlpha](#isalpha)
* [IsAlphaNumeric](#isalphanumeric)
* [IsAlphaNumeric with Space](#isalphanumericspace)
* [IsAlphaNumeric with Space and Dash](#isalphanumericspacedash)
* [IsBase64]($isbase64)
* [IsBlank](#isblank)
* [IsDate](#isdate)
* [IsDecimal](#isdecimal)
* [IsEmail](#isemail)
* [IsEmpty](#isempty)
* [IsHexColor](#ishexcolor)
* [IsHexDecimal](#ishexdecimal)
* [IsIpv4](#isipv4)
* [IsIpv6](#isipv6)
* [IsNumber](#isnumber)
* [IsMultiByte](#ismultibyte)
* [IsLatitude](#islatitude)
* [IsLongitude](#islongitude)
* [IsRgbColor](#isrgbcolor)
* [IsSemver](#issemver)
* [IsUrl](#isurl)
* [Join](#join)
* [Last](#last)
* [LastIndexOf & LastIndexOf Case-Insensitive](#lastindexof)
* [Length](#length)
* [LineCount](#linecount)
* [Lowercase](#lowercase)
* [Lowercase First](#lowercasefirst)
* [Pad Both](#padboth)
* [Pad Left](#padleft)
* [Pad Right](#padright)
* [RandomAlpha](#randomalpha)
* [RandomNumeric](#randomnumeric)
* [RandomAlphaNumeric](#randomalphanumeric)
* [Replace Accents](#replaceaccents)
* [Remove Non Ascii](#removeascii)
* [Remove Whitespace](#removewhitespace)
* [Repeat](#repeat)
* [Replace & Replace Case-Insensitive](#replace)
* [Reverse](#reverse)
* [SentenceCount](#sentencecount)
* [Split](#split)
* [StartsWith](#startswith)
* [Strip Punctuation](#strippunctuation)
* [Strip Tags](#striptags)
* [Sub String](#substring)
* [SwapCase](#swapcase)
* [ToBoolean](#toboolean)
* [Trim](#trim)
* [Trim Left](#trimleft)
* [Trim Right](#trimright)
* [Truncate](#truncate)
* [Truncate Match & Truncate Match Case-Insensitive](#truncatematch)
* [Uppercase](#uppercase)
* [Uppercase Words](#uppercasewords)
* [Width](#width)
* [WordCount](#wordcount)

## Overview

Stringizer is a string library made up of existing PHP multibyte-string functions and a variety of string manipulation solutions found on Stackoverflow.com.  The intent is to save you time looking up string maninpulation solutions yourself and provide the convience of method chaining. Awarded the [Innovation Award](http://www.phpclasses.org/package/9790-PHP-Manipulate-multibyte-text-strings-as-objects.html) in June 2016 from PHPClasses.org.

PSR Compliance and Code Quality:
* [PSR-0: Autoloading Standard](http://www.php-fig.org/psr/psr-0/)
* [PSR-1: Basic Coding Standard](http://www.php-fig.org/psr/psr-1/)
* [PSR-2: Coding Style](http://www.php-fig.org/psr/psr-2/)
* [PSR-4: Autoloader](http://www.php-fig.org/psr/psr-4/)
* [Semver](http://semver.org/) Versioning
* [100% Unit Test Coverage, results by Coveralls.io](https://coveralls.io/github/jasonlam604/Stringizer)
* [Platinum Code Quality Analysis by SensioLabsInsight](https://insight.sensiolabs.com/projects/de25b7db-2be0-4e1a-a3e5-806767ea0438)
* [Continuous Integration and regression unit testing using Travis CI](https://travis-ci.org/jasonlam604/Stringizer)

## Key Highlights

- Built in Multibyte support, where applicable and possible
- Chaining of functions
- In some case removing the hassle of you trying to figure out the right regex solution

## Version

[![Latest Stable Version](https://poser.pugx.org/jasonlam604/stringizer/v/stable)](https://packagist.org/packages/jasonlam604/stringizer)

## Installation

It's recommended that you use [Composer](https://getcomposer.org/) to install Stringizer.

Manual install with composer

```bash
$ composer require jasonlam604/stringizer "^2.12.0"
```

Using the composer.json file

```json
"require": {
    "jasonlam604/stringizer": "^2.12.0"
}
```

This will install Stringizer and all required dependencies. Stringizer requires PHP 5.6.0 or newer.

## Usage

Sample usage:

```php
<?php

// Composer Autoloader
require 'vendor/autoload.php';

use Stringizer\Stringizer;

$s = new Stringizer("myapp");

$s->ensureRight("/");

// The following outputs: myapp/
echo $s->getString(); 

```

## Tests

To execute the test suite, you'll need phpunit.

```bash
$ phpunit
```

## Submit Issues

Feel free to open any Issues, Bugs or suggestions!

## Contributing

Accepting Pull-Requests!

## Credits

- [Jason Lam](https://github.com/jasonlam604)


## License

The Stringizer is licensed under the MIT license. See [License File](LICENSE.md) for more information.


## String Functions

##### base64Decode

Bae64 decode string

```php
$s = new Stringizer("44GT44KT44Gr44Gh44Gv");
$s->base64Decode(); // こんにちは
```

##### base64Encode

Base64 Encode String

```php
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
$s->base64Encode(); // yJjFpsWXw43DscSdw6x6xJXFlQ==
```

##### between

Extracts a string between left and right strings.

```php
$s = new Stringizer("<div>ȘŦŗÍñĝìzĕŕ</div>");
$s->between("<div>", "</div>"); // ȘŦŗÍñĝìzĕŕ
```

##### camelize

Removes any underscores or dashes and converts a string into camel case.

```php
$s = new Stringizer("data_rate");
$s->camelize(); // dataRate
```

##### camelToSnake

Converts Camel case to Snake Case.

```php
$s = new Stringizer("helloSŦŗÍñĝìzĕŕ");
$s->camelToSnake(); // hello_sŦŗÍñĝìzĕŕ
```

##### charAt

Obtain character at specific position in a string where the first position is consider 0.

```php
$s = new Stringizer("Foo Bar Fizz Buzz");
$s->charAt(4); // B
```

##### chars

Return the given string as an array where each index contains a character.

```php
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
$s->chars(); // an array made up 10 indexes ["Ș","Ŧ","ŗ","Í","ñ","ĝ","ì","z","ĕ","ŕ"]
```

```php
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
$s->charAt(1); // Ŧ
```

```php
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
$s->charAt(0); // S
```

##### chompLeft

Deprecated - Removes prefix from start of string.

```php
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
$s->chompLeft("ȘŦŗÍñĝ"); // ìzĕŕ
```

##### chompRight

Deprecated - Removes suffix from start of string.

```php
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
$s->chompRight("ìzĕŕ"); // ȘŦŗÍñĝ
```

##### chopLeft

Removes prefix from start of string.

```php
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
$s->chopLeft("ȘŦŗÍñĝ"); // ìzĕŕ
```

##### chopRight

Removes suffix from start of string.

```php
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
$s->chopRight("ìzĕŕ"); // ȘŦŗÍñĝ
```

##### collapseWhitespace

Remove extra whitespace, leave only one whitespace between characters where there is more then one whitespace value.

```php
$s = new Stringizer(""ȘŦŗÍñĝ\n\nìzĕŕ \n\t    \r"");
$s->concat("collapseWhitespace") // ȘŦŗÍñĝ ìzĕŕ
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

##### first

Grabs a section from the beginning of the string, the size of the section is determine by the given indicated value.

```php  
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
$s->first(6); // ȘŦŗÍñĝ
```

##### hashCode

Determine the hashcode of a string, algorithm matches the hashCode method available in a Java String class

```php  
$s = new Stringizer("Hello, World");
$s->hashCode(); // -505841268
```


##### hasLowercase

Checks if value is contains only lowercase values.

```php  
$s = new Stringizer("stŗiñĝìzĕŕ");
$s->hasLowercase()); // true
```

```php  
$s = new Stringizer("sTŗiñĝìzĕŕ");
$s->hasLowercase()); // false
```

##### hasUppercase

Checks if value is contains only uppercase values.

```php  
$s = new Stringizer("STÃÑ");
$s->hasUppercase()); // true
```

```php  
$s = new Stringizer("StÃÑ");
$s->hasUppercase()); // false
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

##### isAscii

Checks if value contains valid ASCII values only. Optional parameter to allow only printable characters

```php
$s = new Stringizer("abcdefghi....12334567890....ABC..XY!!!@#$%^&*()_+=-<>?:;/.,~][}{\|'");
$s->isAscii(); // true
```

```php
$s = new Stringizer("\x19test\x7F");
$s->isAscii(); // true
$s->isAscii(true); // false
```

##### isAlpha

Checks if value is contains alpha values only.

```php
$s = new Stringizer("FooBar");
$s->isAlpha(); // true
```

```php
$s = new Stringizer("Foo Bar");
$s->isAlpha(); // false
```

##### isAlphaNumeric

Checks if value is contains alphanumeric values only

```php
$s = new Stringizer("F00Bar");
$s->isAlphaNumeric(); // true
```

```php
$s = new Stringizer("F00 Bar");
$s->isAlphaNumeric(); // false
```

##### isAlphaNumericSpace

Checks if value is contains alphanumeric values only including space(s).

```php
$s = new Stringizer("F00 Bar");
$s->isAlphaNumericSpace(); // true
```

```php
$s = new Stringizer("F00 Bar !");
$s->isAlphaNumericSpace(); // false
```

##### isAlphaNumericSpaceDash

Checks if value is contains alphanumeric values only including space(s) and dash(es).

```php
$s = new Stringizer("Marie-Anne Lucy");
$s->isAlphaNumericSpaceDash(); // true
```

```php
$s = new Stringizer("Marie-Ann Lucy!");
$s->isAlphaNumericSpaceDash(); // false
```

##### isBase64

Checks if value is a valid Base64 string

```php
// Decoded value is ȘŦŗÍñĝìzĕŕ
$s = new Stringizer("yJjFpsWXw43DscSdw6x6xJXFlQ==");
$s->isBase64(); // true
```

##### isBlank

Checks if value is blank (alias to isEmpty), if string contains whitespace only it is considered empty.

```php
$s = new Stringizer("\n  \n\r\t   ");
$s->isBlank(); // true
```

##### isDate

Checks if value is valid date based on the PHP function strtotime.

Requirement, default timezone must be set first

```php
date_default_timezone_set('America/Vancouver');
$s = new Stringizer("2015-03-15");
$s->isDate(); // true
```

```php
date_default_timezone_set('America/Vancouver');
$s = new Stringizer("January 1st");
$s->isDate(); // true
```

##### isDecimal

Checks if value is contains decimal value, whole numbers are considered valid.

```php
$s = new Stringizer("19.99");
$s->isDecimal(); // true
```

```php
$s = new Stringizer("19");
$s->isDecimal(); // true
```

```php
$s = new Stringizer("19x");
$s->isDecimal(); // false
```

##### isEmail

Checks if value is a valid email.

```php
$s = new Stringizer("John.Doe@fake.com");
$s->isEmail(); // true
```

```php
$s = new Stringizer("John.Doe@fake@.com");
$s->isEmail(); // false
```

##### isEmpty

Checks if value is empty, if string contains whitespace only it is considered empty.

```php
$s = new Stringizer("\n  \n\r\t   ");
$s->isEmpty(); // true
```

#### isHexColor

Checks if value is valid Hex Color.

```php
$s = new Stringizer("CCDDEE");
$s->isHexColor(); // true
```

```php
$s = new Stringizer("#CCDDEE");
$s->isHexColor(); // false
```

```php
$s = new Stringizer("ZZZZZZ");
$s->isHexColor(); // false
```

#### isHexDecimal

Checks if value is hexdecimal.

```php
$s = new Stringizer("AB10BC99");
$s->isHexDecimal(); // true
```

##### isIPv4

Checks if value is a valid IP, IPv4.

```php
$s = new Stringizer("192.168.1.1");
$s->isIpv4() // true
```

##### isIPv6

Checks if value is a valid IP, IPv6.

```php
$s = new Stringizer("2001:cdba:0000:0000:0000:0000:3257:9652");
$s->isIpv6() // true
```

##### isNumber

Checks if value is a whole number, can be a negative number but can not be a decimal number.

```php
$s = new Stringizer("1234");
$s->isNumber() // true
```

##### isMultiByte

Checks if value is MultiByte

```php
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
$s->isMultiByte() // true
```

```php
$s = new Stringizer("Stringizer");
$s->isMultiByte() // false
```

##### isLatitude

Checks if value is valid Latitude value

```php
$s = new Stringizer("37.138");
$s->isLatitude() // true
```

```php
$s = new Stringizer("-91");
$s->isLatitude() // false
```

##### isLongitude

Checks if value is valid Longitude value

```php
$s = new Stringizer("190");
$s->isLongitude() // true
```

```php
$s = new Stringizer("191");
$s->isLongitude() // false
```

##### isRgbColor

Checks if value is valid RGB Color

```php
$s = new Stringizer("rgb(255,255,255)");
$s->isRgbColor() // true
```

##### isSemver

Checks if value is a valid semver format, see http://semver.org/

```php
$s = new Stringizer("FooBar");
$s->isSemver(); // false
```

```php
$s = new Stringizer("1.0.0");
$s->isSemver(); // true

$s->setString("1.0.0-3.14.6");
$s->isSemver(); // true

$s->setString("0.0.1-beta");
$s->isSemver(); // true
```

```php
$s = new Stringizer("1.0");
$s->isAlpha(); // false
```

##### isUrl

Checks if value is contains a valid URL

```php
$s = new Stringizer("https://github.com");
$s->isUrl(); // true
```

##### join

Concatenates the elements of a to create a single string. The separator string sep is placed between elements in the resulting string.  If there is an existing
value it is over-written.  Default seperator is a comma, if no separator is required then use a blank string.


Uses default separator a comma
```php
$s = new Stringizer("original-string-overwritten");
$s->join(array("Hello","World","Again")); // Hello,World,Again
```

Uses a pipe as the separator
```php
$s = new Stringizer("");
$s->join(array("こ","ん","に","ち","は"), "|") // こ|ん|に|ち|は
```

No separator, use of a blank strinng
```php
$s = new Stringizer("");
$s->join(array("こ","ん","に","ち","は"), "") // こんにちは
```

##### last

Grabs a section from the end of the string, the size of the section is determine by the given indicated value.

```php  
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
$s->last(4); // ìzĕŕ
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

#### length

Find the length of the string

```php
$s = new Stringizer("FizzBuzz");
$s->length(); // 8
```

Multibyte

```php
$s = new Stringizer("キラキラした");
$s->length(); // 6
```

#### lineCount

Count the number of lines based line feed, \n.

```php
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ\nȘŦŗÍñĝìzĕŕ\nȘŦŗÍñĝìzĕŕ");
$s->lineCount(); // 2
```

#### lowercase

Ensure the string is entirely lower case

```php
$s = new Stringizer("FiZZ");
$s->lowercase(); // fizz
```

#### lowercaseFirst

First letter of the string is lower cased

```php
$s = new Stringizer("FiZz");
$s->lowercaseFirst(); // fIZZ
```

#### padBoth

Pad string on both sides with indicated value

Padding with an even amount

```php
$s = new Stringizer("fizz");
$s->padBoth("x", 10); // xxxfizzxxx
```  

Padding with an odd amount, the extra character is addded to the end of the string

```php
$s = new Stringizer("fizz");
$s->padBoth("x", 11); // xxxfizzxxxx
```

#### padLeft

Pad string on left side with indicated string value and number of times to pad with

```php
$s = new Stringizer("10");
$s->padLeft("0", 5); // 00010
```

#### padRight

Pad string on right side with indicated string value and number of times to pad with

```php
$s = new Stringizer("Alien");
$this->assertEquals("Alien     ", $s->padRight(" ", 10)); // "Alien     " 
```

#### randomAlpha

Generate a random alpha value, default length of 10 characters.

```php
$s = new Stringizer("");
$s->randomAlpha(); // aYvPXitjCJ
```

```php
$s = new Stringizer("");
$s->randomAlpha(20); // cmbOUofxAvWeyMGgPHK
```

#### randomNumeric

Generate a random  string value containing only numeric values, default length of 10 characters. It
is important to note this is a string value because otherwise if a value with leading zeros such
as 0123456789 would then be 123456789 as type int; but, then would not be length of 10 characters (or the
desired indicated expected length)

```php
$s = new Stringizer("");
$s->randomNumeric(); // 8277761361
```

#### randomAlphaNumeric

Generate a random alphanumeric value, default length of 10 characters.

```php
$s = new Stringizer("");
$s->randomAlphanumeric(); // w5quanvlUP
```

#### repeat

Returns a string repeated n times.

```php
$s = new Stringizer("FizzöBuzz");
$s->repeat(2); // FizzöBuzzFizzöBuzz
```

```php
$s = new Stringizer("こ");
$s->repeat(5); // こここここ
```

#### replaceAccents

Replace characters with accents with the same character without accents.

```php
$s = new Stringizer("FizzöBuzz Fizz Buzz Fizz Buzzé");
$s->replaceAccents(); // FizzoeBuzz Fizz Buzz Fizz Buzze
```
  
```php        
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
$s->replaceAccents(); // STrIngizer
```

#### removeAscii

Remove non Ascii characters

```php
$s = new Stringizer("FizzöBuzz Fizz Buzz Fizz Buzzé");
$s->removeNonAscii(); // FizzBuzz Fizz Buzz Fizz Buzz
```

#### removeWhitespace

Remove any whitespace from the string (before, after and any in between)

```php
$s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
$s->removeWhitespace(); // FizzBuzzFizzBuzzFizzBuzz
```
 
```php       
$s = new Stringizer(" Ș Ŧ ŗ Í ñ ĝ ì z ĕ ŕ ");
$s->removeWhitespace(); // ȘŦŗÍñĝìzĕŕ
```

#### replace

Match and replace string(s)

```php
$s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
$s->replace("Buzz", "Bar"); // Fizz Bar Fizz Bar Fizz Bar
```

Multiple replace

```php
$s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
$s->replace(array("Fizz","Buzz"), array("Foo","Bar")); // Foo Bar Foo Bar Foo Bar
```

No Match NOT Case-Insensitive

```php
$s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
$s->replace("buzz", "bar"); // Fizz Buzz Fizz Buzz Fizz Buzz
```        
        
Match Case-Insensitive  
```php      
$s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
$s->replaceIncaseSensitive("buzz", "bar"); // Fizz bar Fizz bar Fizz bar
``` 

MultiByte

```php
$s = new Stringizer("Fizz列Buzz列Fizz列Buzz列Fizz列Buzz");
$s->replace("列", " "); // Fizz Buzz Fizz Buzz Fizz Buzz
```

#### reverse

```php        
$s = new Stringizer("mood");
$s->reverse(); // doom
```
    
MultiByte    
    
```php     
$s = new Stringizer("文字列のそれ");
$s->reverse(); // れその列字文
```

#### sentenceCount

Count the number of sentences based sentences ending with one the following: . ! or ?

```php
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ jumped over the stringy stick. ȘŦŗÍñĝìzĕŕ jumped over the stringy stick again!  Or did it?");
$s->sentenceCount(); // 3
```

#### split

Explode string into an array default delimiter is comma

```php        
$s = new Stringizer("Fizz Buzz");
$array = $s->split(" "); // array( 0 => "Fizz", 1 => "Buzz")
```

```php 
$s = new Stringizer("文字列のそれ");
$array = $s->split("の"); // array( 0 => "文字列", 1 => "それ)
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

#### stripPunctuation

Remove all of the punctuation

```php 
$s = new Stringizer("Hello World! It's me #stringizer");
$s->stripPunctuation(); // Hello World Its me stringizer
```      
      
```php   
$s = new Stringizer("*-=!'\",?!Hello* World][");
$s->stripPunctuation(); // Hello World
```

#### stripTags

Remove HTML and PHP tags from a string

```php 
$s = new Stringizer("<html>Hello</html>");
$s->stripTags(); // Hello
```    
       
```php         
$s = new Stringizer("<html><b>こんにちは世界</b></html>");
$s->stripTags(); // こんにちは世界
```
     
Optional second paramter to ignore tags (tags not to be to removed)        
        
```php 
$s = new Stringizer("<html>Hello <b>World</b></html>");
$s->stripTags("<b>"); // Hello <b>World</b>
```

```php 
$s = new Stringizer("<html><head><title>title</title></head><body>Hello <b><span class='fake-class'>World</span></b> こんにちは世界</body></html>");
$s->stripTags(); // titleHello World こんにちは世界
```

#### substring

Find a portion of a string based on postioning (index position in the string) and length of the portion

```php 
$s = new Stringizer("Fizz Buzz Foo Bar");
$s->subString(0, 4); // Fizz
```

```php 
$s = new Stringizer("Fizz Buzz Foo Bar");
$s->subString(5, 4)); // Buzz
```

```php 
$s = new Stringizer("Fizz Buzz Foo Bar");
$s->subString(5, 4)); // Buzz
```

MultiByte

```php
$s = new Stringizer("キラキラした キラキラした");
$s->subString(7); // キラキラした
``` 

#### swapCase

Swap the case of each character.

```php
$s = new Stringizer("hELLO wORLD");
$s->swapCase(); // Hello World
```

#### toBoolean

Converts a logical truth string to boolean.

```php
(new Stringizer(true))->toBoolean(); // true
(new Stringizer(false))->toBoolean(); // false
(new Stringizer("stringizer"))->toBoolean(); // false
(new Stringizer("true"))->toBoolean(); // true
(new Stringizer("false"))->toBoolean(); // false
(new Stringizer("TRUE"))->toBoolean(); // true
(new Stringizer("FALSE"))->toBoolean(); // false
(new Stringizer("on"))->toBoolean(); // true
(new Stringizer("off"))->toBoolean(); // false
(new Stringizer("ON"))->toBoolean(); // true
(new Stringizer("OFF"))->toBoolean(); // false
(new Stringizer("yes"))->toBoolean(); // true
(new Stringizer("no"))->toBoolean(); // false
(new Stringizer("YES"))->toBoolean(); // true
(new Stringizer("NO"))->toBoolean(); // false
(new Stringizer(""))->toBoolean(); // false
(new Stringizer(null))->toBoolean(); // false
(new Stringizer(1))->toBoolean(); // true
(new Stringizer(-1))->toBoolean(); // false
```

#### trim

Remove whitespace both right and left side of the string

```php
$s = new Stringizer("\x20\x20\x20   キラキラしたfizzخالد الشمعة   ");
$s->trim(); // キラキラしたfizzخالد الشمعة
```

#### trimLeft

Remove whitespace left of the string

```php
$s = new Stringizer("\x20\x20\x20   キラキラしたfizzخالد الشمعة   ");
$s->trimLeft()); // キラキラしたfizzخالد الشمعة   
```

#### trimRight

Remove whitespace right of the string

```php
$s = new Stringizer("\x20\x20\x20   キラキラしたfizzخالد الشمعة   ");
$s->trimRight(); // \x20\x20\x20   キラキラしたfizzخالد الشمعة
```
    
#### truncate

Shorten right side of string by the specified indicated amount

```php
$s = new Stringizer("fòô bàř");
$s->truncate(4); // fòô
```

```php
$s = new Stringizer("FizzBuzz");
$s->truncate(4); // Fizz
```

#### truncateMatch

Shorten string left or right side if given substring is match

```php
$s = new Stringizer("fòô bàř");
$s->truncateMatch(" bàř"); // fòô
```

```php
$s = new Stringizer("FizzBuzzFooBar");
$s->truncateMatch("Foo"); // FizzBuzz
```

Case In-sensitive

```php
$s = new Stringizer("FizzBuzzFooBar");
$s->truncateMatchCaseInsensitive("foo"); // FizzBuzz
```

#### uppercase

Ensure entire string is uppercase

```php
$s = new Stringizer("fIzz");
$s->uppercase(); // FIZZ
```

#### uppercaseWords

Ensure entire string is uppercase

```php
$s = new Stringizer("fizz buzz foo bar");
$s->uppercaseWords(); // Fizz Buzz Foo Bar
```

##### width

Find the width of the string this is different then length for multibyte strings

```php
$s = new Stringizer("キラキラした");
$s->width(); // 12, note multi-byte characters take up more space, typice 2 for each character
```  
  
```php        
$s = new Stringizer("FizzBuzz");
$s->length(); // 8
```

#### wordCount

Count the number of words.

```php
$s = new Stringizer("ȘŦŗÍñĝìzĕŕ こんにちは ȘŦŗÍñĝìzĕŕ こんにちは ȘŦŗÍñĝìzĕŕ");
$s->wordCount(); // 5
```

## Basic Functions

#### setstring

Setting the string you want to apply string manipulations on, this will set the orginal value as well.

```php
$s = new Stringizer("dummy-value");
$s->setString("new-dummy-value");

#### getstring

Retrieve the string in its most current state

```php
$s = new Stringizer("dummy-value");
$s->getString();
```

#### getStringOriginal

Retrieve the string state prior to any string manipulations

```php
$s = new Stringizer("dummy-value");
$s->getStringOriginal();
```

#### __toString

Retrieve the string in its most current state

```php
$s = new Stringizer("dummy-value");
echo ($s); // this will output current state, defaults to using the PHP built __toString method
```

#### setEncoding

Set encoding, behind the scences PHP function mb_internal_encoding is applied

```php
$s = new Stringizer("dummy-value");
$s->setEncoding("UTF-8");
$s->getEncoding(); // UTF-8
```

#### getEncoding

```php
$s = new Stringizer("dummy-value");
$s->getEncoding(); // Outputs your default encoding based mb_internal_encoding
```
