<?php
use Stringizer\Stringizer;

/**
 * Trim Right Unit Tests
 */
class TrimRightTest extends PHPUnit_Framework_TestCase
{

    public function testTrimRight()
    {
        $s = new Stringizer("\x20\x20\x20   キラキラしたfizzخالد الشمعة   ");
        $this->assertEquals("\x20\x20\x20   キラキラしたfizzخالد الشمعة", $s->trimRight());
        
        $s = new Stringizer("    Fizz Buzz   ");
        $this->assertEquals("    Fizz Buzz", $s->trimRight());
    }
}
