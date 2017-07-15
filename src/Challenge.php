<?php

namespace src;

use src\Rules\MultipleInterface;

class Challenge {

    protected $rules = [];

    public function addRule(MultipleInterface $rule) {
        $this->rules[] = $rule;
    }

    public function validateRules(int $number): string {
        foreach ($this->rules as $rule) {
            if ($rule->validate($number)) {
                return $rule->render();
            }
        }
        return strval($number);
    }

}
