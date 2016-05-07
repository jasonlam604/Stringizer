<?php
use Stringizer\Stringizer;

/**
 * StripTags Unit Tests
 */
class StripTagsTest extends PHPUnit_Framework_TestCase
{

    public function testValidStripBasicTags()
    {
        $s = new Stringizer("<html>Hello</html>");
        $this->assertEquals("Hello", $s->stripTags());
    }

    public function testValidStripMultipleTags()
    {
        $s = new Stringizer("<html>Hello <b>World</b></html>");
        $this->assertEquals("Hello World", $s->stripTags());
    }

    public function testValidStripTagsWithMultiByte()
    {
        $s = new Stringizer("<html><b>こんにちは世界</b></html>");
        $this->assertEquals("こんにちは世界", $s->stripTags());
    }

    public function testValidStripAllowBold()
    {
        $s = new Stringizer("<html>Hello <b>World</b></html>");
        $this->assertEquals("Hello <b>World</b>", $s->stripTags("<b>"));
    }

    public function testValidStripNestedTags()
    {
        $s = new Stringizer("<html><head><title>title</title></head><body>Hello <b><span class='fake-class'>World</span></b> こんにちは世界</body></html>");
        $this->assertEquals("titleHello World こんにちは世界", $s->stripTags());
    }
}
