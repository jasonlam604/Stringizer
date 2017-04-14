<?php
use Stringizer\Stringizer;

/**
 * Longitude Unit Tests
 */
class LongitudeTest extends PHPUnit_Framework_TestCase
{

    public function testValidLongitude()
    {
        $s = new Stringizer("37.138");
        $this->assertEquals(true, $s->isLongitude());

        $s = new Stringizer("37");
        $this->assertEquals(true, $s->isLongitude());

        $s = new Stringizer("-180");
        $this->assertEquals(true, $s->isLongitude());

        $s = new Stringizer("180");
        $this->assertEquals(true, $s->isLongitude());
    }

    public function testInValidLongitude()
    {
        $s = new Stringizer("x37.138");
        $this->assertEquals(false, $s->isLongitude());

        $s = new Stringizer("191");
        $this->assertEquals(false, $s->isLongitude());

        $s = new Stringizer("-181");
        $this->assertEquals(false, $s->isLongitude());
    }
}
