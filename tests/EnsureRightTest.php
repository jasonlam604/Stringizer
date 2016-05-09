<?php
use Stringizer\Stringizer;

/**
 * EnsureRight Unit Tests
 */
class EnsureRightTest extends PHPUnit_Framework_TestCase
{

    public function testValidEnsureLeft()
    {
        $s = new Stringizer("myapp");
        $this->assertEquals("myapp/", $s->ensureRight("/"));
    }

    public function testValidEnsureLeftPrefixExsists()
    {
        $s = new Stringizer("myapp/");
        $this->assertEquals("myapp/", $s->ensureRight("/"));
    }

    public function testValidEnsureLeftMultiByte()
    {
        $s = new Stringizer("こんにちは世界");
        $this->assertEquals("こんにちは世界/", $s->ensureRight("/"));
        
        $s = new Stringizer("こんにちは世界");
        $this->assertEquals("こんにちは世界 さようなら", $s->ensureRight(" さようなら"));
    }

    public function testValidEnsureLeftPrefixExsistsMultiByte()
    {
        $s = new Stringizer("こんにちは世界");
        $this->assertEquals("こんにちは世界", $s->ensureRight("こんにちは世界"));
    }
}
