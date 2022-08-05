<?php

declare(strict_types=1);

namespace spec\App;

use App\Person;
use PhpSpec\ObjectBehavior;

class PersonSpec extends ObjectBehavior
{
    private const NAME = 'foo';
    private const AGE = 30;

    public function let(): void
    {
        $this->beConstructedWith(self::NAME, self::AGE);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Person::class);
    }

    public function it_contains_data(): void
    {
        $this->name->shouldEqual(self::NAME);
        $this->age->shouldEqual(self::AGE);
    }
}
