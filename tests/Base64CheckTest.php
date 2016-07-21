<?php
use Stringizer\Stringizer;

/**
 * Base64BaseCheck Unit Tests
 */
class Base64BaseCheck extends PHPUnit_Framework_TestCase
{

    public function testValidBasicBase64()
    {
        // Stringizer
        $s = new Stringizer("U3RyaW5naXplcg==");
        $this->assertTrue($s->isBase64());

        // ȘŦŗÍñĝìzĕŕ
        $s = new Stringizer("yJjFpsWXw43DscSdw6x6xJXFlQ==");
        $this->assertTrue($s->isBase64());

        // こんにちは
        $s = new Stringizer("44GT44KT44Gr44Gh44Gv");
        $this->assertTrue($s->isBase64());
    }

    public function testInvalidBase64()
    {
        $s = new Stringizer("#iu3498r");
        $this->assertFalse($s->isBase64());

        $s = new Stringizer("asiudfh9w=8uihf");
        $this->assertFalse($s->isBase64());
    }
}
