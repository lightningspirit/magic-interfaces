<?php

/**
 * Class MagicTest
 */
class MagicTest extends PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testAssertIsInvokable()
    {
        $this->assertInstanceOf('\Invokable', new ExampleClass());
    }

    /**
     *
     */
    public function testAssertStringifiable()
    {
        $this->assertInstanceOf('\Stringifiable', new ExampleClass());
    }

}