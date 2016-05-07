<?php
use Stringizer\Stringizer;

/**
 * Camelize Unit Tests
 */
class CamelizeTest extends PHPUnit_Framework_TestCase
{

    public function testCamelize()
    {
        $s = new Stringizer("data_rate");
        $this->assertEquals("dataRate", $s->camelize());
        
        $s = new Stringizer("background-image");
        $this->assertEquals("backgroundImage", $s->camelize());
        
        $s = new Stringizer("--flag-off");
        $this->assertEquals("flagOff", $s->camelize());
        
        $s = new Stringizer("__constant_value__");
        $this->assertEquals("constantValue", $s->camelize());
    }
}
