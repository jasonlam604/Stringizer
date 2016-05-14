<?php
use Stringizer\Stringizer;

/**
 * Trim Unit Tests
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
}
