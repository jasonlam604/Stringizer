<?php
use Stringizer\Stringizer;

/**
 * RemoveNonAscii Unit Tests
 */
class RemoveNonAsciiTest extends PHPUnit_Framework_TestCase
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
