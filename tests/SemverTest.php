<?php
use Stringizer\Stringizer;

/**
 * Semver Unit Tests
 */
class SemverTest extends PHPUnit_Framework_TestCase
{

    public function testValidSemver()
    {
        $s = new Stringizer("1.0.0");
        $this->assertEquals(true, $s->isSemver());

        $s->setString("0.0.1");
        $this->assertEquals(true, $s->isSemver());

        $s->setString("v0.0.1");
        $this->assertEquals(true, $s->isSemver());

        $s->setString("0.0.1-beta");
        $this->assertEquals(true, $s->isSemver());

        $s->setString("0.0.1-beta.10");
        $this->assertEquals(true, $s->isSemver());

        $s->setString("1.0.0-3.14.6");
        $this->assertEquals(true, $s->isSemver());

        $s->setString("1.0.0-x-3.14.6.z");
        $this->assertEquals(true, $s->isSemver());
    }

    public function testInValidSemver()
    {
        $s = new Stringizer("1");
        $this->assertEquals(false, $s->isSemver());

        $s->setString("1.0");
        $this->assertEquals(false, $s->isSemver());

        $s->setString("v1.0");
        $this->assertEquals(false, $s->isSemver());

        $s->setString("1.01.0");
        $this->assertEquals(false, $s->isSemver());

        $s->setString("1.1.01");
        $this->assertEquals(false, $s->isSemver());

        $s->setString("1.1!.1");
        $this->assertEquals(false, $s->isSemver());

        $s->setString("1.1.1-9+");
        $this->assertEquals(false, $s->isSemver());

        $s->setString("1.1.1z");
        $this->assertEquals(false, $s->isSemver());
    }
}
