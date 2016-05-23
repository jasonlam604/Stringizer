<?php
use Stringizer\Stringizer;

/**
 * Email Unit Tests
 */
class EmailTest extends PHPUnit_Framework_TestCase
{

    public function testValidEmails()
    {
        $s = new Stringizer("valid@gmail.com");
        $this->assertEquals(true, $s->isEmail());

        $s = new Stringizer("x@x.org");
        $this->assertEquals(true, $s->isEmail());

        $s = new Stringizer("111@somewhere.com");
        $this->assertEquals(true, $s->isEmail());
    }

    public function testInValidEmails()
    {
        $s = new Stringizer("invalid@gmail..com");
        $this->assertEquals(false, $s->isEmail());

        $s = new Stringizer("x@x@.org");
        $this->assertEquals(false, $s->isEmail());
    }
}
