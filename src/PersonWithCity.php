<?php

declare(strict_types=1);

namespace App;

class PersonWithCity extends Person
{
    public function __construct(
        string $name,
        int $age,
        public readonly City $city,
    ) {
        parent::__construct($name, $age);
    }
}
