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

        $s->setString("Hello\n\t\r");
        $this->assertEquals(true, $s->isAscii());

        $s->setString("\x19test\x7F");
        $this->assertEquals(true, $s->isAscii());
    }

    public function testValidAsciiPrintableOnly()
    {
        $s = new Stringizer(" ");
        $this->assertEquals(true, $s->isAscii(true));

        $s->setString("123");
        $this->assertEquals(true, $s->isAscii(true));

        $s->setString("abc");
        $this->assertEquals(true, $s->isAscii(true));

        $s->setString("abcdefghi....12334567890....ABC..XY!!!@#$%^&*()_+=-<>?:;/.,~][}{\|'");
        $this->assertEquals(true, $s->isAscii(true));

        $s->setString("Hello\n\t\r");
        $this->assertEquals(false, $s->isAscii(true));

        $s->setString("\x19test\x7F");
        $this->assertEquals(false, $s->isAscii(true));
    }

    public function testInvalidAscii()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals(false, $s->isAscii());
    }
}
