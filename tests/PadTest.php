<?php
use Stringizer\Stringizer;

/**
 * Pad Unit Tests
 */
class PadTest extends PHPUnit_Framework_TestCase
{

    public function testPadRight()
    {
        $s = new Stringizer("fizz");
        $this->assertEquals("fizzxxxxxx", $s->padRight("x", 10));
    }

    public function testPadLeft()
    {
        $s = new Stringizer("fizz");
        $this->assertEquals("xxxxxxfizz", $s->padLeft("x", 10));
    }

    public function testPadBothEven()
    {
        $s = new Stringizer("fizz");
        $this->assertEquals("xxxfizzxxx", $s->padBoth("x", 10));
    }

    public function testPadBothOdd()
    {
        $s = new Stringizer("fizz");
        $this->assertEquals("xxxfizzxxxx", $s->padBoth("x", 11));
    }

    public function testPadRightMultiByte()
    {
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals("文字列のそれxxxx", $s->padRight("x", 10));
    }

    public function testPadLeftMultiByte()
    {
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals("xxxx文字列のそれ", $s->padLeft("x", 10));
    }

    public function testPadBothMultiByteEven()
    {
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals("xx文字列のそれxx", $s->padBoth("x", 10));
    }

    public function testPadBothMultiByteOdd()
    {
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals("xx文字列のそれxxx", $s->padBoth("x", 11));
    }

    public function testPadwithZeros()
    {
        $s = new Stringizer("10");
        $this->assertEquals("00010", $s->padLeft("0", 5));
        
        $s = new Stringizer("10.00");
        $this->assertEquals("10.000", $s->padLeft("0", 6));
    }

    public function testPadSamplesFromPHPDotNet()
    {
        $s = new Stringizer("Alien");
        $this->assertEquals("Alien     ", $s->padRight(" ", 10));
        
        $s = new Stringizer("Alien");
        $this->assertEquals("-=-=-Alien", $s->padLeft("-=", 10));
        
        $s = new Stringizer("Alien");
        $this->assertEquals("__Alien___", $s->padBoth("_", 10));
        
        $s = new Stringizer("Alien");
        $this->assertEquals("Alien_", $s->padRight("___", 6));
        
        $s = new Stringizer("Alien");
        $this->assertEquals("Alien", $s->padRight("*", 3));
    }
}
