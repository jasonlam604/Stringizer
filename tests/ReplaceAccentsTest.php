<?php
use Stringizer\Stringizer;

/**
 * ReplaceAccents Unit Tests - full test not really necessary as this should be taken care by
 *
 * https://github.com/cocur/slugify as the RemoveAccents is really just facade wrapper
 */
class ReplaceAccentsTest extends PHPUnit_Framework_TestCase
{

    /**
     * Remove non Ascii characters
     */
    public function testConvertAccents()
    {
        $s = new Stringizer("FizzöBuzz Fizz Buzz Fizz Buzzé");
        $this->assertEquals("FizzoeBuzz Fizz Buzz Fizz Buzze", $s->replaceAccents());
        
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("STrIngizer", $s->replaceAccents());
    }
}
