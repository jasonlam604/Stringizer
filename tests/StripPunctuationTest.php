<?php
use Stringizer\Stringizer;

/**
 * Strip Puncuation Unit Tests
 */
class StripPuncuationTest extends PHPUnit_Framework_TestCase
{

    public function testValidStripPunctuation()
    {
        $s = new Stringizer("Hello World! It's me #stringizer");
        $this->assertEquals("Hello World Its me stringizer", $s->stripPunctuation());
    }

    public function testValidStripMorePunctuation()
    {
        $s = new Stringizer("*-=!'\",?!Hello* World][");
        $this->assertEquals("Hello World", $s->stripPunctuation());
    }
}
