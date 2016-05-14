<?php
use Stringizer\Stringizer;

/**
 * EnsureLeft Unit tests
 */
class EnsureLeftTest extends PHPUnit_Framework_TestCase
{

    public function testValidEnsureLeft()
    {
        $s = new Stringizer("myapp");
        $this->assertEquals("/myapp", $s->ensureLeft("/"));
    }

    public function testValidEnsureLeftPrefixExsists()
    {
        $s = new Stringizer("/myapp");
        $this->assertEquals("/myapp", $s->ensureLeft("/"));
    }

    public function testValidEnsureLeftMultiByte()
    {
        $s = new Stringizer("こんにちは世界");
        $this->assertEquals("/こんにちは世界", $s->ensureLeft("/"));
        
        $s = new Stringizer("こんにちは世界");
        $this->assertEquals("さようなら こんにちは世界", $s->ensureLeft("さようなら "));
    }

    public function testValidEnsureLeftPrefixExsistsMultiByte()
    {
        $s = new Stringizer("こんにちは世界");
        $this->assertEquals("こんにちは世界", $s->ensureLeft("こんにちは世界"));
    }
}
