<?php

declare(strict_types=1);

namespace App;

use Sushi\ValueObject;

class City extends ValueObject
{
    public function __construct(
        public readonly string $name,
    ) {
        parent::__construct();
    }
}
