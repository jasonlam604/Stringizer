<?php
use Stringizer\Stringizer;

/**
 * HashCode Unit Tests
 */
class HashCodeTest extends PHPUnit_Framework_TestCase
{

    /**
     * *
     * Simple Java output hash code for string value "Hello, World"
     *
     *
     * public class HelloWorld {
     * public static void main(String[] args) {
     *
     * System.out.println( ("Hello, World").hashCode());
     * }
     * }
     */
    public function testValidStartsWith()
    {
        $s = new Stringizer("Hello, World");
        $this->assertEquals("-505841268", $s->hashCode());
        
        $s = new Stringizer("Hello, World");
        $this->assertNotEquals("bad-match", $s->hashCode());
    }
}
