<?php
use Stringizer\Stringizer;

/**
 * Lowercase Unit Tests
 */
class LowercaseFirstTest extends PHPUnit_Framework_TestCase
{

    public function testLowercaseFirst()
    {
        $s = new Stringizer("FiZz");
        $this->assertEquals("fIZZ", $s->lowercaseFirst());
        
        $s = new Stringizer("fizz buzz FOO bar");
        $this->assertEquals("fIZZ BUZZ FOO BAR", $s->lowercaseFirst());
        
        $s = new Stringizer("ABCDEFG");
        $this->assertEquals("aBCDEFG", $s->lowercaseFirst());
        
        // Do not Upper case first
        $s = new Stringizer("FiZz");
        $this->assertEquals("fiZz", $s->lowercaseFirst(true));
    }
}
