<?php
use Stringizer\Stringizer;

/**
 * Latitude Unit Tests
 */
class LatitudeTest extends PHPUnit_Framework_TestCase
{

    public function testValidLatitude()
    {
        $s = new Stringizer("37.138");
        $this->assertEquals(true, $s->isLatitude());

        $s = new Stringizer("37");
        $this->assertEquals(true, $s->isLatitude());

        $s = new Stringizer("-90");
        $this->assertEquals(true, $s->isLatitude());

        $s = new Stringizer("90");
        $this->assertEquals(true, $s->isLatitude());
    }

    public function testInValidLatitude()
    {
        $s = new Stringizer("x37.138");
        $this->assertEquals(false, $s->isLatitude());

        $s = new Stringizer("91");
        $this->assertEquals(false, $s->isLatitude());

        $s = new Stringizer("-91");
        $this->assertEquals(false, $s->isLatitude());
    }
}
