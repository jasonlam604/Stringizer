<?php
use Stringizer\Stringizer;

/**
 * HexColor Unit Tests
 */
class HexColorTest extends PHPUnit_Framework_TestCase
{

    public function testValidHexColor()
    {
        $s = new Stringizer("000000");
        $this->assertEquals(true, $s->isHexColor());

        $s = new Stringizer("ffffff");
        $this->assertEquals(true, $s->isHexColor());

        $s = new Stringizer("CCDDEE");
        $this->assertEquals(true, $s->isHexColor());

        $s = new Stringizer("fff");
        $this->assertEquals(true, $s->isHexColor());

        $s = new Stringizer("#fff");
        $this->assertEquals(true, $s->isHexColor());
    }

    public function testInvValidHexColor()
    {
        $s = new Stringizer("");
        $this->assertEquals(false, $s->isHexColor());

        $s = new Stringizer("#ff");
        $this->assertEquals(false, $s->isHexColor());

        $s = new Stringizer("#fffffz");
        $this->assertEquals(false, $s->isHexColor());
    }
}
