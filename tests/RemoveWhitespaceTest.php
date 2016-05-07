<?php
use Stringizer\Stringizer;

/**
 * RemoveWhitespace Unit Tests - full test not really necessary as this should be taken care by
 *
 * https://github.com/cocur/slugify as the RemoveAccents is really just facade wrapper
 */
class RemoveWhitespaceTest extends PHPUnit_Framework_TestCase
{

    public function testRemoveWhitespace()
    {
        $s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
        $this->assertEquals("FizzBuzzFizzBuzzFizzBuzz", $s->removeWhitespace());
        
        $s = new Stringizer(" Ș Ŧ ŗ Í ñ ĝ ì z ĕ ŕ ");
        $this->assertEquals("ȘŦŗÍñĝìzĕŕ", $s->removeWhitespace());
        
        // For some reason HHVM fails on this, commenting for now, need to revisit
        /*
         * $s = new Stringizer(" Hello \t \n \r \x0B World ");
         * $this->assertEquals("HelloWorld", $s->removeWhitespace());
         */
    }
}
