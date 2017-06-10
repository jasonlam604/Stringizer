<?php
namespace Stringizer;

use Stringizer\Transformers\Concat;
use Stringizer\Transformers\Lowercase;
use Stringizer\Transformers\Uppercase;
use Stringizer\Transformers\UppercaseFirst;
use Stringizer\Transformers\UppercaseWords;
use Stringizer\Transformers\LowercaseFirst;
use Stringizer\Transformers\Trim;
use Stringizer\Transformers\TrimLeft;
use Stringizer\Transformers\TrimRight;
use Stringizer\Transformers\Length;
use Stringizer\Transformers\Width;
use Stringizer\Transformers\SubString;
use Stringizer\Transformers\Reverse;
use Stringizer\Transformers\StartsWith;
use Stringizer\Transformers\EndsWith;
use Stringizer\Transformers\HashCode;
use Stringizer\Transformers\Truncate;
use Stringizer\Transformers\TruncateMatch;
use Stringizer\Transformers\IndexOf;
use Stringizer\Transformers\LastIndexOf;
use Stringizer\Transformers\Split;
use Stringizer\Transformers\Replace;
use Stringizer\Transformers\Pad;
use Stringizer\Transformers\RemoveNonAscii;
use Stringizer\Transformers\ReplaceAccents;
use Stringizer\Transformers\Camelize;
use Stringizer\Transformers\RemoveWhitespace;
use Stringizer\Transformers\Contains;
use Stringizer\Transformers\SubStringCount;
use Stringizer\Transformers\Dasherize;
use Stringizer\Transformers\StripTags;
use Stringizer\Transformers\EnsureLeft;
use Stringizer\Transformers\EnsureRight;
use Stringizer\Transformers\EmptyCheck;
use Stringizer\Transformers\StripPunctuation;
use Stringizer\Transformers\Alpha;
use Stringizer\Transformers\AlphaNumeric;
use Stringizer\Transformers\AlphaNumericSpace;
use Stringizer\Transformers\AlphaNumericSpaceDash;
use Stringizer\Transformers\Email;
use Stringizer\Transformers\Number;
use Stringizer\Transformers\Date;
use Stringizer\Transformers\Decimal;
use Stringizer\Transformers\Ipv4;
use Stringizer\Transformers\Ipv6;
use Stringizer\Transformers\HexDecimal;
use Stringizer\Transformers\LowercaseCheck;
use Stringizer\Transformers\UppercaseCheck;
use Stringizer\Transformers\Random;
use Stringizer\Transformers\WordCount;
use Stringizer\Transformers\SentenceCount;
use Stringizer\Transformers\Url;
use Stringizer\Transformers\Chars;
use Stringizer\Transformers\CollapseWhitespace;
use Stringizer\Transformers\Base64Check;
use Stringizer\Transformers\Base64;
use Stringizer\Transformers\Between;
use Stringizer\Transformers\CamelToSnake;
use Stringizer\Transformers\ChopLeft;
use Stringizer\Transformers\ChopRight;
use Stringizer\Transformers\BooleanConverter;
use Stringizer\Transformers\Repeat;
use Stringizer\Transformers\SwapCase;
use Stringizer\Transformers\Join;
use Stringizer\Transformers\HexColor;
use Stringizer\Transformers\RgbColor;
use Stringizer\Transformers\MultiByte;
use Stringizer\Transformers\Semver;
use Stringizer\Transformers\Ascii;
use Stringizer\Transformers\Latitude;
use Stringizer\Transformers\Longitude;
use Stringizer\Transformers\Json;

/**
 * Stringizer
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Stringizer
{

    /**
     * String that is manipulated / transformed
     *
     * @var string
     */
    private $value;

    /**
     * Hold the original given string value
     *
     * @var string
     */
    private $valueOriginal;

    /**
     * Hold encoding
     *
     * @var string
     */
    private $encoding;

    /**
     * Constructor
     *
     * @param string $stringValue
     * @param string $stringEncoding
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($stringValue, $encoding = null)
    {
        $this->setString($stringValue);

        if (empty($encoding))
            $encoding = \mb_internal_encoding();

        $this->setEncoding($encoding);
    }

    public function base64Encode()
    {
        $this->value = (new Base64($this->value))->execute();
        return $this;
    }

    public function base64Decode()
    {
        $this->value = (new Base64($this->value,true))->execute();
        return $this;
    }

    public function camelize()
    {
        $this->value = (new Camelize($this->value))->execute();
        return $this;
    }

    public function camelToSnake()
    {
        $this->value = (new CamelToSnake($this->value))->execute();
        return $this;
    }

    public function charAt($index)
    {
        $this->value = (new SubString($this->value,$index,1))->execute();
        return $this;
    }

    public function chars()
    {
        return $this->value = (new Chars($this->value))->execute();
    }

    /**
     * @deprecated Since 2.8.0 named incorrectly see chopLeft
     */
    public function chompLeft($prefix)
    {
        $this->value = (new ChopLeft($this->value,$prefix))->execute();
        return $this;
    }

    /**
     * @deprecated Since 2.8.0 named incorrectly see chopRight
     */
    public function chompRight($prefix)
    {
        $this->value = (new ChopRight($this->value,$prefix))->execute();
        return $this;
    }

    public function chopLeft($prefix)
    {
        $this->value = (new ChopLeft($this->value,$prefix))->execute();
        return $this;
    }

    public function chopRight($prefix)
    {
        $this->value = (new ChopRight($this->value,$prefix))->execute();
        return $this;
    }

    public function collapseWhitespace()
    {
        $this->value = (new CollapseWhitespace($this->value))->execute();
        return $this;
    }

    /**
     * Append 2 String values
     *
     * @param string $value
     *
     * @param string $preAppend
     *            flag when true to prepend value
     *
     * @return \Stringizer\Stringizer
     */
    public function concat($value, $preAppend = false)
    {
        $transformer = new Concat($this->value, $value);
        $transformer->setPreAppend($preAppend);
        $this->value = $transformer->execute();
        return $this;
    }

    public function between($left,$right)
    {
        $this->value = (new Between($this->value,$left,$right))->execute();
        return $this;
    }

    public function contains($needle)
    {
        return (new Contains($this->value, $needle))->execute();
    }

    public function containsIncaseSensitive($needle)
    {
        return (new Contains($this->value, $needle))->enableCaseInsensitive()->execute();
    }

    public function containsCount($needle)
    {
        return (new SubStringCount($this->value, $needle))->execute();
    }

    public function containsCountIncaseSensitive($needle)
    {
        return (new SubStringCount($this->value, $needle))->enableCaseInsensitive()->execute();
    }

    public function dasherize()
    {
        $this->value = (new Dasherize($this->value))->execute();
        return $this;
    }

    public function endsWith($needle)
    {
        return (new EndsWith($this->value, $needle))->execute();
    }

    public function ensureLeft($prefix)
    {
        $this->value = (new EnsureLeft($this->value, $prefix))->execute();
        return $this;
    }

    public function ensureRight($suffix)
    {
        $this->value = (new EnsureRight($this->value, $suffix))->execute();
        return $this;
    }

    public function first($numberOfCharacters)
    {
        $this->value = (new SubString($this->value, 0, $numberOfCharacters))->execute();
        return $this;
    }

    public function hashCode()
    {
        $this->value = (string) (new HashCode($this->value))->execute();
        return $this;
    }

    public function hasLowercase()
    {
        return (new LowercaseCheck($this->value))->execute();
    }

    public function hasUppercase()
    {
        return (new UppercaseCheck($this->value))->execute();
    }

    public function indexOf($needle, $offset = 0)
    {
        return (new IndexOf($this->value, $needle, $offset))->execute();
    }

    public function indexOfCaseInsensitive($needle, $offset = 0)
    {
        return (new IndexOf($this->value, $needle, $offset))->enableCaseInsensitive()->execute();
    }

    public function isAlpha()
    {
        return (new Alpha($this->value))->execute();
    }

    public function isAlphaNumeric()
    {
        return (new AlphaNumeric($this->value))->execute();
    }

    public function isAlphaNumericSpace()
    {
        return (new AlphaNumericSpace($this->value))->execute();
    }

    public function isAlphaNumericSpaceDash()
    {
        return (new AlphaNumericSpaceDash($this->value))->execute();
    }

    public function isAscii($isPrintableOnly=false)
    {
        return (new Ascii($this->value,$isPrintableOnly))->execute();
    }

    public function isBase64()
    {
        return (new Base64Check($this->value))->execute();
    }

    /**
     * Alias for isEmpty
     */
    public function isBlank()
    {
        return (new EmptyCheck($this->value))->execute();
    }

    public function isDate()
    {
        return (new Date($this->value))->execute();
    }

    public function isDecimal()
    {
        return (new Decimal($this->value))->execute();
    }

    public function isEmail()
    {
        return (new Email($this->value))->execute();
    }

    public function isEmpty()
    {
        return (new EmptyCheck($this->value))->execute();
    }

    public function isHexColor()
    {
        return (new HexColor($this->value))->execute();
    }

    public function isHexDecimal()
    {
        return (new HexDecimal($this->value))->execute();
    }

    public function isIpv4()
    {
        return (new Ipv4($this->value))->execute();
    }

    public function isIpv6()
    {
        return (new Ipv6($this->value))->execute();
    }

    public function isJson()
    {
        return (new Json($this->value))->execute();
    }

    public function isLatitude()
    {
        return (new Latitude($this->value))->execute();
    }

    public function isLongitude()
    {
        return (new Longitude($this->value))->execute();
    }

    public function isMultiByte()
    {
        return (new MultiByte($this->value))->execute();
    }

    public function isNumber()
    {
        return (new Number($this->value))->execute();
    }

    public function isRgbColor()
    {
        return (new RgbColor($this->value))->execute();
    }

    public function isSemver()
    {
        return (new Semver($this->value))->execute();
    }

    public function isUrl($santize=false)
    {
        return (new Url($this->value,$santize))->execute();
    }

    public function join($values,$separator=",")
    {
        $this->value = (new Join($values,$separator))->execute();
        return $this;
    }

    public function last($numberOfCharacters)
    {
        $this->value = (new SubString($this->value, ($this->length() - $numberOfCharacters)))->execute();
        return $this;
    }

    public function lastIndexOf($needle, $offset = 0)
    {
        return (new LastIndexOf($this->value, $needle, $offset))->execute();
    }

    public function lastIndexOfCaseInsensitive($needle, $offset = 0)
    {
        return (new LastIndexOf($this->value, $needle, $offset, true))->enableCaseInsensitive()->execute();
    }

    public function lineCount()
    {
        return (new SubStringCount($this->value,"\n"))->execute();
    }

    /**
     * Length
     *
     * @return int length of string
     */
    public function length()
    {
        return (new Length($this->value))->execute();
    }

    /**
     * Convert entire sgring to lowercase
     *
     * @return \Stringizer\Stringizer
     */
    public function lowercase()
    {
        $this->value = (new Lowercase($this->value))->execute();
        return $this;
    }

    public function lowercaseFirst($ignoreUppercaseFirst = false)
    {
        if (! $ignoreUppercaseFirst) {
            $this->value = (new Uppercase($this->value))->execute();
        }
        $this->value = (new LowercaseFirst($this->value))->execute();
        return $this;
    }

    public function padBoth($padValue, $padAmount)
    {
        $this->value = (new Pad($this->value, $padValue, $padAmount, STR_PAD_BOTH))->execute();
        return $this;
    }

    public function padLeft($padValue, $padAmount)
    {
        $this->value = (new Pad($this->value, $padValue, $padAmount, STR_PAD_LEFT))->execute();
        return $this;
    }

    public function padRight($padValue, $padAmount)
    {
        $this->value = (new Pad($this->value, $padValue, $padAmount, STR_PAD_RIGHT))->execute();
        return $this;
    }

    public function randomAlpha($length=10)
    {
        $this->value = (new Random(Random::$RANDOM_ALPHA,$length))->execute();
        return $this;
    }

    public function randomNumeric($length=10)
    {
        $this->value = (new Random(Random::$RANDOM_NUMERIC,$length))->execute();
        return $this;
    }

    public function randomAlphanumeric($length=10)
    {
        $this->value = (new Random(Random::$RANDOM_ALPHA_NUMERIC,$length))->execute();
        return $this;
    }

    public function repeat($repeatNumber)
    {
        $this->value = (new Repeat($this->value, $repeatNumber))->execute();
        return $this;
    }

    public function replace($needles, $replacements)
    {
        $this->value = (new Replace($this->value, $needles, $replacements))->execute();
        return $this;
    }

    public function replaceIncaseSensitive($needles, $replacements)
    {
        $this->value = (new Replace($this->value, $needles, $replacements))->enableCaseInsensitive()->execute();
        return $this;
    }

    public function replaceAccents()
    {
        $this->value = (new ReplaceAccents($this->value))->execute();
        return $this;
    }

    public function removeNonAscii()
    {
        $this->value = (new RemoveNonAscii($this->value))->execute();
        return $this;
    }

    public function removeWhitespace()
    {
        $this->value = (new RemoveWhitespace($this->value))->execute();
        return $this;
    }

    public function reverse()
    {
        $this->value = (new Reverse($this->value))->execute();
        return $this;
    }

    public function sentenceCount()
    {
        return (new SentenceCount($this->value))->execute();
    }

    public function startsWith($needle)
    {
        return (new StartsWith($this->value, $needle))->execute();
    }

    public function stripPunctuation()
    {
        $this->value = (new StripPunctuation($this->value))->execute();
        return $this;
    }

    public function stripTags($allowableTags = '')
    {
        $this->value = (new StripTags($this->value, $allowableTags))->execute();
        return $this;
    }

    public function split($delimiter = ",")
    {
        return (new Split($this->value, $delimiter))->execute();
    }

    public function subString($start, $length = null)
    {
        $this->value = (new SubString($this->value, $start, $length))->execute();
        return $this;
    }

    public function swapCase()
    {
        $this->value = (new SwapCase($this->value))->execute();
        return $this;
    }

    public function toBoolean()
    {
        return (new BooleanConverter($this->value))->execute();
    }

    public function trim()
    {
        $this->value = (new Trim($this->value))->execute();
        return $this;
    }

    public function trimRight()
    {
        $this->value = (new TrimRight($this->value))->execute();
        return $this;
    }

    public function trimLeft()
    {
        $this->value = (new TrimLeft($this->value))->execute();
        return $this;
    }

    /**
     * Truncate remove the number of indicated values at the end of the string
     *
     * @param int $numberToTruncate
     *
     * @throws \InvalidArgumentException
     *
     * @return \Stringizer\Stringizer
     */
    public function truncate($numberToTruncate)
    {
        $this->value = (new Truncate($this->value, $numberToTruncate))->execute();
        return $this;
    }

    public function truncateMatch($stringToMatch, $truncateBefore = false)
    {
        $result = (new TruncateMatch($this->value, $stringToMatch, ! $truncateBefore))->execute();
        if ($result === FALSE) {
            return $result;
        } else {
            $this->value = $result;
            return $this;
        }
    }

    public function truncateMatchCaseInsensitive($stringToMatch, $truncateBefore = false)
    {
        $result = (new TruncateMatch($this->value, $stringToMatch, ! $truncateBefore))->enableCaseInsensitive()->execute();
        if ($result === FALSE) {
            return $result;
        } else {
            $this->value = $result;
            return $this;
        }
    }

    public function uppercase()
    {
        $this->value = (new Uppercase($this->value))->execute();
        return $this;
    }

    public function uppercaseWords()
    {
        $this->value = (new UppercaseWords((new Lowercase($this->value))->execute()))->execute();
        return $this;
    }

    public function uppercaseFirst($ignoreLowercaseFirst = false)
    {
        if (! $ignoreLowercaseFirst) {
            $this->value = (new Lowercase($this->value))->execute();
        }
        $this->value = (new UppercaseFirst($this->value))->execute();
        return $this;
    }

    public function width()
    {
        return (new Width($this->value))->execute();
    }

    public function wordCount()
    {
        return (new WordCount($this->value))->execute();
    }

    public function setEncoding($encoding)
    {
        if (! isset($encoding))
            throw new \Exception("Given encoding value not valid");

        $this->encoding = $encoding;

        mb_internal_encoding($this->encoding);
    }

    public function getEncoding()
    {
        return $this->encoding;
    }

    public function getStringOriginal()
    {
        return $this->valueOriginal;
    }

    public function setString($stringValue)
    {

        if (!isset($stringValue)) {
            throw new \InvalidArgumentException("Given value is null not a string");
        } elseif (is_array($stringValue)) {
            throw new \InvalidArgumentException("Given value is an array not a string");
        } elseif (is_object($stringValue) && ! method_exists($stringValue, "__toString")) {
            throw new \InvalidArgumentException("Given object does not have a __toString method");
        }

        $this->value = (string) $stringValue;

        $this->valueOriginal = $this->value;
    }

    public function getString()
    {
        return $this->__toString();
    }

    public function __toString()
    {
        return $this->value;
    }
}
