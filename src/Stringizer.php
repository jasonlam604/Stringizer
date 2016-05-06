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
use Stringizer\Transformers\RemoveAccents;
use Stringizer\Transformers\Camelize;
use Stringizer\Transformers\RemoveWhitespace;
use Stringizer\Transformers\Contains;
use Stringizer\Transformers\SubStringCount;

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
     * Flag indicator represent throwing exceptions on tranformers that result in nothing
     * ie: TruncateMatch and the given string is not found by default applis no change
     * but an exception is required then the flag 'isTransformerException is to be enabled
     *
     * NOT Being used, comment for now
     */
    // private $isTransformerException;
    
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
        if (empty($stringValue)) {
            throw new \InvalidArgumentException("Given value is null not a string");
        } elseif (is_array($stringValue)) {
            throw new \InvalidArgumentException("Given value is an array not a string");
        } elseif (is_object($stringValue) && ! method_exists($stringValue, "__toString")) {
            throw new \InvalidArgumentException("Given object does not have a __toString method");
        }
        
        $this->value = (string) $stringValue;
        
        $this->valueOriginal = $this->value;
        
        if (empty($encoding))
            $encoding = \mb_internal_encoding();
        
        $this->setEncoding($encoding);
    }

    public function camelize()
    {
        $this->value = (new Camelize($this->value))->execute();
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
        return (new SubString($this->value, $needle))->enableCaseInsensitive()->execute();
    }

    public function endsWith($needle)
    {
        return (new EndsWith($this->value, $needle))->execute();
    }

    public function hashCode()
    {
        return (new HashCode($this->value))->execute();
    }

    public function indexOf($needle, $offset = 0)
    {
        return (new IndexOf($this->value, $needle, $offset))->execute();
    }

    public function indexOfCaseInsensitive($needle, $offset = 0)
    {
        return (new IndexOf($this->value, $needle, $offset))->enableCaseInsensitive()->execute();
    }

    public function lastIndexOf($needle, $offset = 0)
    {
        return (new LastIndexOf($this->value, $needle, $offset))->execute();
    }

    public function lastIndexOfCaseInsensitive($needle, $offset = 0)
    {
        return (new LastIndexOf($this->value, $needle, $offset, true))->enableCaseInsensitive()->execute();
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

    public function removeAccents()
    {
        $this->value = (new RemoveAccents($this->value))->execute();
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

    public function startsWith($needle)
    {
        return (new StartsWith($this->value, $needle))->execute();
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

    /*
     * public function enableTransformerExceptions()
     * {
     * $this->isTransformerException = true;
     * }
     */
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

    public function getString()
    {
        return $this->__toString();
    }

    public function __toString()
    {
        return $this->value;
    }
}