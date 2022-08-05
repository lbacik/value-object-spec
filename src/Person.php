<?php

declare(strict_types=1);

namespace App;

use Sushi\ValueObject;
use Sushi\ValueObject\Exceptions\InvariantException;
use Sushi\ValueObject\Invariant;

use function PHPUnit\Framework\assertGreaterThanOrEqual;

class Person extends ValueObject
{
    private const MIN_AGE_IN_YEARS = 18;
    private const NAME_MIN_LENGTH = 3;

    public function __construct(
        public readonly string $name,
        public readonly int $age,
    ) {
        parent::__construct();
    }

    #[Invariant]
    public function onlyAdults(): void
    {
        if ($this->age < self::MIN_AGE_IN_YEARS) {
            throw InvariantException::violation(
                'The age is below ' . self::MIN_AGE_IN_YEARS
            );
        }
    }

    #[Invariant]
    public function checkName(): void
    {
        assertGreaterThanOrEqual(
            self::NAME_MIN_LENGTH,
            mb_strlen($this->name)
        );
    }
}
