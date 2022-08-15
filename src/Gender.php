<?php

declare(strict_types=1);

namespace App;

class Gender
{
    public const MALE = 'male';
    public const FEMALE = 'female';

    public function __construct(
        public readonly string $value,
    ) {
    }
}
