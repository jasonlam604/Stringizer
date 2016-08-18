<?php
use Stringizer\Stringizer;

/**
 * Between Unit Tests
 */
class BetweenTest extends PHPUnit_Framework_TestCase
{
    public function testValid()
    {
        $s = new Stringizer("<div>Hello World</div>");
        $this->assertEquals("Hello World", $s->between("<div>", "</div>"));

        // Right Side no match, retains the last right side </div>
        $s = new Stringizer("<div>Hello World</div></div>");
        $this->assertEquals("Hello World</div>", $s->between("<div>", "</div>"));

        $s = new Stringizer("<div>Hello World");
        $this->assertEquals("Hello World", $s->between("<div>", "</div>"));
    }

    public function testValidMultiByte()
    {
        $s = new Stringizer("<div>ȘŦŗÍñĝìzĕŕ</div>");
        $this->assertEquals("ȘŦŗÍñĝìzĕŕ", $s->between("<div>", "</div>"));

        $s = new Stringizer("<div>こんにちは</div>");
        $this->assertEquals("こんにちは", $s->between("<div>", "</div>"));
    }

}
