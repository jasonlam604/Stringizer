<?php
use Stringizer\Stringizer;

/**
 * Trim Left Unit Tests
 */
class TrimLeftTest extends PHPUnit_Framework_TestCase
{

    public function testTrimLeft()
    {
        $s = new Stringizer("\x20\x20\x20   キラキラしたfizzخالد الشمعة   ");
        $this->assertEquals("キラキラしたfizzخالد الشمعة   ", $s->trimLeft());
        
        $s = new Stringizer("    Fizz Buzz   ");
        $this->assertEquals("Fizz Buzz   ", $s->trimLeft());
    }
}
