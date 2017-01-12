<?php
use Stringizer\Stringizer;

/**
 * RgbColor Unit Tests
 */
class RgbColorTest extends PHPUnit_Framework_TestCase
{

    public function testValidRgbColor()
    {
        $s = new Stringizer("rgb(0,128,255)");
        $this->assertEquals(true, $s->isRgbColor());

        $s = new Stringizer("rgb(0,0,0)");
        $this->assertEquals(true, $s->isRgbColor());

        $s = new Stringizer("rgb(255,255,255)");
        $this->assertEquals(true, $s->isRgbColor());
    }

    public function testInvValidRgbColor()
    {
        $s = new Stringizer("");
        $this->assertEquals(false, $s->isRgbColor());

        $s = new Stringizer("rgb(255,256,255)");
        $this->assertEquals(false, $s->isRgbColor());

        $s = new Stringizer("rgb(255,255,255)");
        $this->assertEquals(true, $s->isRgbColor());

        $s = new Stringizer("rgb(25.5,255,255)");
        $this->assertEquals(false, $s->isRgbColor());

        $s = new Stringizer("rgb(01,255,255)");
        $this->assertEquals(false, $s->isRgbColor());
    }
}
