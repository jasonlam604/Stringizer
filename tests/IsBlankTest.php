<?php
use Stringizer\Stringizer;

/**
 * IsBlank Unit Tests
 */
class IsBlankTest extends PHPUnit_Framework_TestCase
{

    public function testBlankWithSpace()
    {
        $s = new Stringizer(" ");
        $this->assertEquals(true, $s->isBlank());
    }

    public function testBlankWithTab()
    {
        $s = new Stringizer("\t");
        $this->assertEquals(true, $s->isBlank());
    }

    public function testBlankWithNewLineFeed()
    {
        $s = new Stringizer("\n");
        $this->assertEquals(true, $s->isBlank());
    }

    public function testBlankWithCarriageReturn()
    {
        $s = new Stringizer("\r");
        $this->assertEquals(true, $s->isBlank());
    }

    public function testBlankWithWhitespaces()
    {
        $s = new Stringizer("\n  \n\r\t   ");
        $this->assertEquals(true, $s->isBlank());
    }
}
