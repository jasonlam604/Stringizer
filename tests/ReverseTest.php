<?php
use Stringizer\Stringizer;

/**
 * Reverse Unit Tests
 */
class ReverseTest extends PHPUnit_Framework_TestCase
{

    public function testConcat()
    {
        $s = new Stringizer("dog");
        $this->assertEquals("god", $s->reverse());
        
        $s = new Stringizer("stop");
        $this->assertEquals("pots", $s->reverse());
        
        $s = new Stringizer("mad");
        $this->assertEquals("dam", $s->reverse());
        
        $s = new Stringizer("mood");
        $this->assertEquals("doom", $s->reverse());
        
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals("れその列字文", $s->reverse());
    }
}
