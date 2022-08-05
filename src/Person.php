<?php

declare(strict_types=1);

namespace App;

class Person
{
    public function __construct(
        public string $name,
        public int $age,
    ) {
    }
}
