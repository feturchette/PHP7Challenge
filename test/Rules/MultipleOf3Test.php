<?php

namespace Test\Rules;

use src\Rules\MultipleOf3;

class MultipleOf3Test extends \PhpUnit_Framework_TestCase {

    protected $object;

    function setup() {
        $this->object = new MultipleOf3();
    }

    function testValidateTrue() {
        $this->assertTrue($this->object->validate(3));
    }

    function testValidateFalse() {
        $this->assertFalse($this->object->validate(4));
    }

    function testRender() {
        $this->assertEquals('Linio', $this->object->render());
    }

}
