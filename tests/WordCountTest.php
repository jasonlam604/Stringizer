<?php
use Stringizer\Stringizer;

/**
 * WordCount Unit Tests
 */
class WordCountTest extends PHPUnit_Framework_TestCase
{

    public function testValidCountLongString()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
        $this->assertEquals(1, $s->wordCount());
    }

    public function testValidCountMultiByte()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ こんにちは ȘŦŗÍñĝìzĕŕ こんにちは ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals(5, $s->wordCount());
    }

    public function testValidCountNone()
    {
        $s = new Stringizer("");
        $this->assertEquals(0, $s->wordCount());
    }

}
