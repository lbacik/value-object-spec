<?php

declare(strict_types=1);

namespace App;

class PersonWithGender extends Person
{
    public function __construct(
        string $name,
        int $age,
        public readonly Gender $gender,
    ) {
        parent::__construct($name, $age);
    }
}
