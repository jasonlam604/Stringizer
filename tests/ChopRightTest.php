<?php
use Stringizer\Stringizer;

/**
 * ChopRightTest Unit Tests
 */
class ChopRightTest extends PHPUnit_Framework_TestCase
{

    public function testValid()
    {
        $s = new Stringizer("foobar");
        $this->assertEquals("foo", $s->chopRight("bar"));
    }

    public function testValidNoMatch()
    {
        $s = new Stringizer("foobar");
        $this->assertEquals("foobar", $s->chopRight("FU"));
    }

    public function testValidMultiByte()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("ȘŦŗÍñĝ", $s->chopRight("ìzĕŕ"));

        $s = new Stringizer("こんにちは</div>");
        $this->assertEquals("こんにちは", $s->chopRight("</div>"));
    }

    public function testValidMultiByteNoMatch()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("ȘŦŗÍñĝìzĕŕ", $s->chopRight("ȘŦŗÍñĝXXX"));

        $s = new Stringizer("こんにちは</div>");
        $this->assertEquals("こんにちは</div>", $s->chopRight("<span>"));
    }
}
