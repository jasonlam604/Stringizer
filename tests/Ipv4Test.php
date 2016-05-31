<?php
use Stringizer\Stringizer;

/**
 * Ipv4 Unit Tests
 */
class Ipv4Test extends PHPUnit_Framework_TestCase
{

    public function testValidIp()
    {
        $s = new Stringizer("192.168.1.1");
        $this->assertEquals(true, $s->isIpv4());
        
        $s = new Stringizer("1.1.1.1");
        $this->assertEquals(true, $s->isIpv4());
        
        $s = new Stringizer("0.0.0.0");
        $this->assertEquals(true, $s->isIpv4());
    }

    public function testInValidIp()
    {
        $s = new Stringizer("0.0.0.x");
        $this->assertEquals(false, $s->isIpv4());
        
        $s = new Stringizer("257.1.1.1");
        $this->assertEquals(false, $s->isIpv4());
    }
}
