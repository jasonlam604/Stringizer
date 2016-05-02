<?php
use Stringizer\Stringizer;

/**
 * StartsWith Unit Tests
 */
class StartsWithTest extends PHPUnit_Framework_TestCase
{

    public function testValidStartsWith()
    {
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals(true, $s->startsWith("文"));
        
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals(false, $s->startsWith("文文文文"));
        
        $s = new Stringizer("Fizz Buzz");
        $this->assertEquals(true, $s->startsWith("Fizz B"));
    }
}