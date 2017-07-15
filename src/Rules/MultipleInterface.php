<?php

namespace src\Rules;

interface MultipleInterface {

    public function validate(int $number): bool;

    public function render(): string;
    
}
