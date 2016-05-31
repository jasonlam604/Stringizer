<?php
use Stringizer\Stringizer;

/**
 * Ipv6 Unit Tests
 */
class Ipv6Test extends PHPUnit_Framework_TestCase
{

    public function testValidIp()
    {
        $s = new Stringizer("2001:cdba:0000:0000:0000:0000:3257:9652");
        $this->assertEquals(true, $s->isIpv6());
    }

    public function testInValidIp()
    {
        $s = new Stringizer("xx");
        $this->assertEquals(false, $s->isIpv6());

        $s = new Stringizer("2001:cdba:0000:0000:0000:0000:3257:9652x");
        $this->assertEquals(false, $s->isIpv6());
    }
}
