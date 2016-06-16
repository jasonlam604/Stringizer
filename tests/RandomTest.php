<?php
use Stringizer\Stringizer;

/**
 * Random Unit Tests
 */
class RandomTest extends PHPUnit_Framework_TestCase
{

    public function testValidAlphaRandom()
    {
        // Default is size 10
        $s = new Stringizer("");
        $randomString1 = $s->randomAlpha()->getString();

        // Default is size 10
        $this->assertEquals(10, $s->length());

        // Confirm is Alpha
        $this->assertEquals(true, $s->isAlpha());

        $randomString2 = $s->randomAlpha()->getString();

        $this->assertNotEquals($randomString1, $randomString2);

        // Test non default size
        $randomString2 = $s->randomAlpha(20)->getString();
        $this->assertEquals(20, $s->length());
    }

    public function testValidNumericRandom()
    {
        // Default is size 10
        $s = new Stringizer("");
        $randomNum1 = $s->randomNumeric()->getString();

        // Default is size 10
        $this->assertEquals(10, $s->length());

        // Confirm is Number
        $this->assertEquals(true, $s->isNumber());

        $randonNum2 = $s->randomNumeric()->getString();

        $this->assertNotEquals($randomNum1, $randonNum2);

        // Test non default size
        $s->randomNumeric(20)->getString();
        $this->assertEquals(20, $s->length());
    }

    public function testValidAlphaNumericRandom()
    {
        // Default is size 10
        $s = new Stringizer("");
        $randomString1 = $s->randomAlphanumeric()->getString();

        // Default is size 10
        $this->assertEquals(10, $s->length());

        // Confirm is AlphaNumeric
        $this->assertEquals(true, $s->isAlphaNumeric());

        $randomString2 = $s->randomAlphanumeric()->getString();

        $this->assertNotEquals($randomString1, $randomString2);

        // Test non default size
        $randomString2 = $s->randomAlphanumeric(20)->getString();
        $this->assertEquals(20, $s->length());
    }
}
