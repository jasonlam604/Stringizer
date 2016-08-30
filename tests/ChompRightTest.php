<?php
use Stringizer\Stringizer;

/**
 * ChompRightTest Unit Tests
 */
class ChompRightTest extends PHPUnit_Framework_TestCase
{

    public function testValid()
    {
        $s = new Stringizer("foobar");
        $this->assertEquals("foo", $s->chompRight("bar"));
    }

    public function testValidNoMatch()
    {
        $s = new Stringizer("foobar");
        $this->assertEquals("foobar", $s->chompRight("FU"));
    }

    public function testValidMultiByte()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("ȘŦŗÍñĝ", $s->chompRight("ìzĕŕ"));

        $s = new Stringizer("こんにちは</div>");
        $this->assertEquals("こんにちは", $s->chompRight("</div>"));
    }

    public function testValidMultiByteNoMatch()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("ȘŦŗÍñĝìzĕŕ", $s->chompRight("ȘŦŗÍñĝXXX"));

        $s = new Stringizer("こんにちは</div>");
        $this->assertEquals("こんにちは</div>", $s->chompRight("<span>"));
    }
}
