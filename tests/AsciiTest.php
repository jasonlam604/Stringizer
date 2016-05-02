<?php
use Stringizer\Stringizer;

/**
 * Ascii Unit Tests
 */
class AsciiTest extends PHPUnit_Framework_TestCase
{

    /**
     * Remove non Ascii characters
     */
    public function testRemoveNonAscii()
    {
        $s = new Stringizer("FizzöBuzz Fizz Buzz Fizz Buzzé");
        $this->assertEquals("FizzBuzz Fizz Buzz Fizz Buzz", $s->removeNonAscii());
    }
}