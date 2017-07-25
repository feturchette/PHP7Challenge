<?php

namespace Test\Rules;

use src\Rules\MultipleOf3And5;

class MultipleOf3And5Test extends \PhpUnit_Framework_TestCase {

    protected $object;

    function setup() {
        $this->object = new MultipleOf3And5();
    }

    function testValidateTrue() {
        $this->assertTrue($this->object->validate(15));
    }

    function testValidateFalse() {
        $this->assertFalse($this->object->validate(4));
    }

    function testRender() {
        $this->assertEquals('Linianos', $this->object->render());
    }

}
