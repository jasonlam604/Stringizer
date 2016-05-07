<?php
use Stringizer\Stringizer;

/**
 * Replace Unit Tests
 */
class ReplaceTest extends PHPUnit_Framework_TestCase
{

    public function testStringReplace()
    {
        $s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
        $this->assertEquals("Fizz Bar Fizz Bar Fizz Bar", $s->replace("Buzz", "Bar"));
    }

    public function testReplaceMultipleMatchesWithSameReplacement()
    {
        $s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
        $this->assertEquals("Bar Bar Bar Bar Bar Bar", $s->replace(array(
            "Fizz",
            "Buzz"
        ), "Bar"));
    }

    public function testReplaceMultipleMatchesSameSizeArrays()
    {
        $s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
        $this->assertEquals("Foo Bar Foo Bar Foo Bar", $s->replace(array(
            "Fizz",
            "Buzz"
        ), array(
            "Foo",
            "Bar"
        )));
        $this->assertEquals("Buzz Fizz Buzz Fizz Buzz Fizz", $s->replace(array(
            "Foo",
            "Bar"
        ), array(
            "Buzz",
            "Fizz"
        )));
    }

    public function testStringReplaceIncaseSensitive()
    {
        // Replacement becase the case is not matching
        $s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
        $this->assertEquals("Fizz Buzz Fizz Buzz Fizz Buzz", $s->replace("buzz", "bar"));
        
        $s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
        $this->assertEquals("Fizz bar Fizz bar Fizz bar", $s->replaceIncaseSensitive("buzz", "bar"));
    }

    public function testMultiByte()
    {
        $s = new Stringizer("Fizz列Buzz列Fizz列Buzz列Fizz列Buzz");
        $this->assertEquals("Fizz Buzz Fizz Buzz Fizz Buzz", $s->replace("列", " "));
        $this->assertEquals("Fizz列Buzz列Fizz列Buzz列Fizz列Buzz", $s->replace(" ", "列"));
    }
}
