<?php

namespace src;

use src\Rules\MultipleInterface;

class Challenge {

    protected $rules = [];

    public function addRule(MultipleInterface $rule) {
        $this->rules[] = $rule;
    }

    public function validateNumber(int $number): string {
        foreach ($this->rules as $rule) {
            if ($rule->validate($number)) {
                return $rule->render();
            }
        }

        return strval($number);
    }

    public function validateArray(array $array): array {
        $result = array_map(function ($number) {
            return $this->validateNumber($number);
        }, $array);

        return $result;
    }

}
