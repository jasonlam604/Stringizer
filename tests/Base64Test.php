<?php
use Stringizer\Stringizer;

/**
 * Base64Base Unit Tests for isBase64, Base64 Encode and Base64 Decode
 */
class Base64Test extends PHPUnit_Framework_TestCase
{

    public function testValidBasicBase64()
    {
        // Stringizer
        $s = new Stringizer("U3RyaW5naXplcg==");
        $this->assertTrue($s->isBase64());
        $this->assertEquals("Stringizer", $s->base64Decode());

        // ȘŦŗÍñĝìzĕŕ
        $s = new Stringizer("yJjFpsWXw43DscSdw6x6xJXFlQ==");
        $this->assertTrue($s->isBase64());
        $this->assertEquals("ȘŦŗÍñĝìzĕŕ", $s->base64Decode());

        // こんにちは
        $s = new Stringizer("44GT44KT44Gr44Gh44Gv");
        $this->assertTrue($s->isBase64());
        $this->assertEquals("こんにちは", $s->base64Decode());
    }

    public function testInvalidBase64()
    {
        $s = new Stringizer("#iu3498r");
        $this->assertFalse($s->isBase64());

        $s = new Stringizer("asiudfh9w=8uihf");
        $this->assertFalse($s->isBase64());
    }

    public function testBase64EncodeAndDecode()
    {
        $s = new Stringizer("Stringizer");
        $this->assertEquals("U3RyaW5naXplcg==", $s->base64Encode());
        $this->assertEquals("Stringizer", $s->base64Decode());

        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("yJjFpsWXw43DscSdw6x6xJXFlQ==", $s->base64Encode());
        $this->assertEquals("ȘŦŗÍñĝìzĕŕ", $s->base64Decode());

        $s = new Stringizer("こんにちは");
        $this->assertEquals("44GT44KT44Gr44Gh44Gv", $s->base64Encode());
        $this->assertEquals("こんにちは", $s->base64Decode());
    }

    public function testChaining()
    {
        $s = new Stringizer("Stringizer   ");
        $this->assertEquals("Stringizer", $s->trim()
            ->base64Encode()
            ->base64Decode());
    }
}
