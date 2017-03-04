<?php
use Stringizer\Stringizer;

/**
 * Ascii Unit Tests
 */
class Ascii extends PHPUnit_Framework_TestCase
{

    public function testValidAscii()
    {
        $s = new Stringizer(" ");
        $this->assertEquals(true, $s->isAscii());

        $s->setString("123");
        $this->assertEquals(true, $s->isAscii());

        $s->setString("abc");
        $this->assertEquals(true, $s->isAscii());

        $s->setString("abcdefghi....12334567890....ABC..XY!!!@#$%^&*()_+=-<>?:;/.,~][}{\|'");
        $this->assertEquals(true, $s->isAscii());
    }

    public function testInvalidAscii()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals(false, $s->isAscii());
    }
}
