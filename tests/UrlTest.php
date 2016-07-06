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
}
