<?php
require_once 'FizzBuzz.php';
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase{

    public function testNormal(){
        $test = 1;
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->fizzBuzzTest($test),'1');
    }
    
    public function testFizz(){
        $test = 3;
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->fizzBuzzTest($test),'Fizz');
    }

    public function testBuzz(){
        $test = 5;
        $fizzbuzz =  new FizzBuzz();
        $this->assertEquals($fizzbuzz->fizzBuzzTest($test),'Buzz');
    }

    public function testFizzBuzz(){
        $test = 15;
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->fizzBuzzTest($test),'FizzBuzz');
    }
}
