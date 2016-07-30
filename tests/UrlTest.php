<?php
use Stringizer\Stringizer;

/**
 * Url Unit Tests
 */
class UrlTest extends PHPUnit_Framework_TestCase
{

    public function testValidUrl()
    {
        $s = new Stringizer("https://github.com/jasonlam604/Stringizer");
        $this->assertEquals(true, $s->isUrl());

        $s = new Stringizer("http://www.jasonlam604.com");
        $this->assertEquals(true, $s->isUrl());

        $s = new Stringizer("http://jasonlam604.com");
        $this->assertEquals(true, $s->isUrl());

        $s = new Stringizer("https://github.com");
        $this->assertEquals(true, $s->isUrl());
    }

    public function testInValidUrl()
    {
        $s = new Stringizer("https://");
        $this->assertEquals(false, $s->isUrl());

        $s = new Stringizer("http://www.jasonlam604***com");
        $this->assertEquals(false, $s->isUrl());

        $s = new Stringizer("http://jasonlam604. com");
        $this->assertEquals(false, $s->isUrl());

        $s = new Stringizer("https:///github.com");
        $this->assertEquals(false, $s->isUrl());
    }

    public function testUrlSantize()
    {

        $s = new Stringizer("http://jason��lam604.co�m");

        // Unsantized should fail
        $this->assertEquals(false, $s->isUrl());

        // Santize should pass
        $this->assertEquals(true, $s->isUrl(true));
    }
}
