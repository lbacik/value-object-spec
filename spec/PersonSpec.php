<?php

declare(strict_types=1);

namespace spec\App;

use App\Person;
use PhpSpec\ObjectBehavior;

class PersonSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Person::class);
    }
}
