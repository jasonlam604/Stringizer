<?php
use Stringizer\Stringizer;

/**
 * EndsWith Unit Tests
 */
class EndsWithTest extends PHPUnit_Framework_TestCase
{

    public function testValidStartsWith()
    {
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals(true, $s->endsWith("れ"));
        
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals(false, $s->endsWith("れれれれ"));
        
        $s = new Stringizer("Fizz Buzz");
        $this->assertEquals(true, $s->endsWith("zz"));
    }
}
