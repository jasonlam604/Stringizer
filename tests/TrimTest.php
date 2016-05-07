<?php
use Stringizer\Stringizer;

/**
 * Trim, Trim Left, Trim Right Unit Tests
 */
class TrimTest extends PHPUnit_Framework_TestCase
{

    public function testTrim()
    {
        $s = new Stringizer("\x20\x20\x20   キラキラしたfizzخالد الشمعة   ");
        $this->assertEquals("キラキラしたfizzخالد الشمعة", $s->trim());
        
        $s = new Stringizer(" Fizz Buzz   ");
        $this->assertEquals("Fizz Buzz", $s->trim());
    }

    public function testTrimNohtingtoTrim()
    {
        $s = new Stringizer("キラキラしたfizzخالد الشمعة");
        $this->assertEquals("キラキラしたfizzخالد الشمعة", $s->trim());
    }

    public function testTrimLeft()
    {
        $s = new Stringizer("\x20\x20\x20   キラキラしたfizzخالد الشمعة   ");
        $this->assertEquals("キラキラしたfizzخالد الشمعة   ", $s->trimLeft());
        
        $s = new Stringizer("    Fizz Buzz   ");
        $this->assertEquals("Fizz Buzz   ", $s->trimLeft());
    }

    public function testTrimRight()
    {
        $s = new Stringizer("\x20\x20\x20   キラキラしたfizzخالد الشمعة   ");
        $this->assertEquals("\x20\x20\x20   キラキラしたfizzخالد الشمعة", $s->trimRight());
        
        $s = new Stringizer("    Fizz Buzz   ");
        $this->assertEquals("    Fizz Buzz", $s->trimRight());
    }
}
