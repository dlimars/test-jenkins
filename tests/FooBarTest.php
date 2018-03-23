<?php


use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: dlima
 * Date: 3/22/18
 * Time: 20:01
 */
class FooBarTest extends TestCase
{
    public function testSumAAndB()
    {
        $fooBar = new \Foo\FooBar(20, 30);
        $this->assertEquals(50, $fooBar->sum());
    }
}