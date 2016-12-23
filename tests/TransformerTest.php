<?php
use Stringizer\Transformers\Transformer;

/**
 * Transformer Unit Tests
 */
class TransformerTest extends PHPUnit_Framework_TestCase
{

    public function testTransformer()
    {
        $t = new Transformer("dummy-value");
        $this->assertEquals("dummy-value", $t->getValue());

        $t->setValue("new-dummy-value");
        $this->assertEquals("new-dummy-value", $t->getValue());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testTransformerNullException()
    {
        $t = new Transformer(null);
    }
}
