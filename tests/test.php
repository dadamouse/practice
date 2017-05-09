<?php
require __DIR__ . '/../src/test.php';
class Test extends PHPUnit_Framework_TestCase
{
    public function testBracket_case1()
    {
        //arrange
        $input = '{[()()]}';
        
        
        //actual
        $actual = solution($input);
        $expected = 1;

        //assert
        $this->assertEquals($expected, $actual);
    }

    public function testBracket_case2()
    {
        //arrange
        $input = '([)()]';
        
        
        //actual
        $actual = solution($input);
        $expected = 0;

        //assert
        $this->assertEquals($expected, $actual);
    }

    public function testBracket_case3()
    {
        //arrange
        $input = '{{{{';
        
        
        //actual
        $actual = solution($input);
        $expected = 0;

        //assert
        $this->assertEquals($expected, $actual);
    }
}
