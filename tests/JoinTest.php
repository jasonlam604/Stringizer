<?php
use Stringizer\Stringizer;

/**
 * Join Unit Tests
 */
class JoinTest extends PHPUnit_Framework_TestCase
{

    public function testJoin()
    {
        $s = new Stringizer("");
        $this->assertEquals("Hello,World,Again", $s->join(array(
            "Hello",
            "World",
            "Again"
        )));
        $this->assertEquals("Hello, World, Again", $s->join(array(
            "Hello",
            "World",
            "Again"
        ), ", "));
        $this->assertEquals("Hello|World|Again", $s->join(array(
            "Hello",
            "World",
            "Again"
        ), "|"));
    }

    public function testJoinMultiByte()
    {
        $s = new Stringizer("こんにちは");
        $this->assertEquals("こ,ん,に,ち,は", $s->join(array(
            "こ",
            "ん",
            "に",
            "ち",
            "は"
        )));
        $this->assertEquals("こ, ん, に, ち, は", $s->join(array(
            "こ",
            "ん",
            "に",
            "ち",
            "は"
        ), ", "));
        $this->assertEquals("こ|ん|に|ち|は", $s->join(array(
            "こ",
            "ん",
            "に",
            "ち",
            "は"
        ), "|"));
        $this->assertEquals("こんにちは", $s->join(array(
            "こ",
            "ん",
            "に",
            "ち",
            "は"
        ), ""));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testNotArrayException()
    {
        $s = new Stringizer("");
        $this->assertEquals("Hello,World,Again", $s->join("bad-value-not-array"));
    }
}
