<?php
use Stringizer\Stringizer;

/**
 * Split Unit Tests
 */
class SplitTest extends PHPUnit_Framework_TestCase
{

    public function testSplitValid()
    {
        $s = new Stringizer("Fizz Buzz");
        $array = $s->split(" ");
        $this->assertEquals(2, count($array));
        $this->assertEquals("Fizz", $array[0]);
        $this->assertEquals("Buzz", $array[1]);
        
        $s = new Stringizer("文字列のそれ");
        $array = $s->split("の");
        $this->assertEquals(2, count($array));
        $this->assertEquals("文字列", $array[0]);
        $this->assertEquals("それ", $array[1]);
        
        $s = new Stringizer("Foo|Bar|Fizz|Buzz|");
        $array = $s->split("|");
        $this->assertEquals(5, count($array));
        $this->assertEquals("Foo", $array[0]);
        $this->assertEquals("Bar", $array[1]);
        $this->assertEquals("Fizz", $array[2]);
        $this->assertEquals("Buzz", $array[3]);
        $this->assertEquals("", $array[4]);
    }

    public function testSplitValidButNoDelimiterMatch()
    {
        $s = new Stringizer("Fizz Buzz");
        $array = $s->split(",");
        $this->assertEquals(1, count($array));
        $this->assertEquals("Fizz Buzz", $array[0]);
    }
}