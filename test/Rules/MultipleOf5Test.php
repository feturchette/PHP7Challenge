<?php

namespace Test\Rules;

use src\Rules\MultipleOf5;

class MultipleOf5Test extends \PhpUnit_Framework_TestCase {

    protected $object;

    function setup() {
        $this->object = new MultipleOf5();
    }

    function testValidateTrue() {
        $this->assertTrue($this->object->validate(5));
    }

    function testValidateFalse() {
        $this->assertFalse($this->object->validate(4));
    }

    function testRender() {
        $this->assertEquals('IT', $this->object->render());
    }

}
