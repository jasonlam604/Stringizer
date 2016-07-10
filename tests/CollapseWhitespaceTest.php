<?php
use Stringizer\Stringizer;

/**
 * CollapseWhitespace Unit Tests
 */
class CollapseWhitespaceTest extends PHPUnit_Framework_TestCase
{

    public function testValidNothingtoCollapse()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
        $this->assertEquals("abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", $s->collapseWhitespace());
    }

    public function testValidNothingtoCollapseOnlySingleSpaces()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ 1234567890");
        $this->assertEquals("abcdedfghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ 1234567890", $s->collapseWhitespace());
    }

    public function testValidNothingtoCollapseOnlySingleSpacesSpaceOnEnds()
    {
        $s = new Stringizer(" abcdedfghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ 1234567890   ");
        $this->assertEquals("abcdedfghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ 1234567890", $s->collapseWhitespace());
    }

    public function testValidMultiByte()
    {
        $s = new Stringizer(" ȘŦŗÍñĝìzĕŕ       こんにちは     ");
        $this->assertEquals("ȘŦŗÍñĝìzĕŕ こんにちは", $s->collapseWhitespace());

        $s = new Stringizer(" Ș Ŧ ŗ Í ñ ĝ ì z ĕ ŕ こ ん に ち は ");
        $this->assertEquals("Ș Ŧ ŗ Í ñ ĝ ì z ĕ ŕ こ ん に ち は", $s->collapseWhitespace());

        $s = new Stringizer("ȘŦŗÍñĝ\n\nìzĕŕ \n\t    \r");
        $this->assertEquals("ȘŦŗÍñĝ ìzĕŕ", $s->collapseWhitespace());
    }
}
