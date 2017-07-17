<?php

namespace Test;

use src\Challenge;
use src\Rules\MultipleOf3;
use src\Rules\MultipleOf3And5;
use src\Rules\MultipleOf5;

class ChallengeTest extends \PhpUnit_Framework_TestCase {

    protected $object;

    function setup() {
        $this->object = new Challenge();
        $this->object->addRule(new MultipleOf3And5);
        $this->object->addRule(new MultipleOf3);
        $this->object->addRule(new MultipleOf5);
    }

    function testValidateNumber4() {
        $this->assertEquals('4', $this->object->validateNumber(4));
    }

    function testValidateNumberLinio() {
        $this->assertEquals('Linio', $this->object->validateNumber(3));
    }

    function testValidateNumberIT() {
        $this->assertEquals('IT', $this->object->validateNumber(5));
    }

    function testValidateNumberLinianos() {
        $this->assertEquals('Linianos', $this->object->validateNumber(15));
    }
    
    function testValidateArray4LinioITLinianos(){
        $this->assertEquals(array('4','Linio','IT','Linianos'), $this->object->validateArray(array(4,3,5,15)));
    }

}
