<?php
use Stringizer\Stringizer;

/**
 * RemoveAccents Unit Tests - full test not really necessary as this should be taken care by
 *
 * https://github.com/cocur/slugify as the RemoveAccents is really just facade wrapper
 */
class RemoveAccentsTest extends PHPUnit_Framework_TestCase
{

    /**
     * Remove non Ascii characters
     */
    public function testConvertAccents()
    {
        $s = new Stringizer("FizzöBuzz Fizz Buzz Fizz Buzzé");
        $this->assertEquals("FizzoeBuzz Fizz Buzz Fizz Buzze", $s->removeAccents());
        
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("STrIngizer", $s->removeAccents());
    }
}
