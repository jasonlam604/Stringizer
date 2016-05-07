<?php
use Stringizer\Stringizer;

/**
 * Dasherize Unit Tests
 */
class DasherizeTest extends PHPUnit_Framework_TestCase
{

    public function testDasherize()
    {
        $s = new Stringizer("dataRate");
        $this->assertEquals("data-rate", $s->dasherize());
        
        $s = new Stringizer("backgroundImage");
        $this->assertEquals("background-image", $s->dasherize());
        
        $s = new Stringizer("HelloWorldThisIsCamelized");
        $this->assertEquals("-hello-world-this-is-camelized", $s->dasherize());
    }
}