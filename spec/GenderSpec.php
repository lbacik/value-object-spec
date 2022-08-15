<?php

declare(strict_types=1);

namespace spec\App;

use App\Gender;
use PhpSpec\ObjectBehavior;

class GenderSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(Gender::MALE);
    }

    public function it_is_initializable(): void
    {
        $this->shouldHaveType(Gender::class);
    }

    public function it_is_male(): void
    {
        $this->value->shouldBe(Gender::MALE);
    }
}
