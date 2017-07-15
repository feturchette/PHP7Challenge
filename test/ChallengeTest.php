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

    function testRenderNumber() {
        $this->assertEquals(4, $this->object->validateRules(4));
    }

    function testRenderLinio() {
        $this->assertEquals('Linio', $this->object->validateRules(3));
    }

    function testRenderIT() {
        $this->assertEquals('IT', $this->object->validateRules(5));
    }

    function testRenderLinianos() {
        $this->assertEquals('Linianos', $this->object->validateRules(15));
    }

}
