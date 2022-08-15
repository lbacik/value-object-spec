<?php

declare(strict_types=1);

namespace spec\App;

use App\City;
use PhpSpec\ObjectBehavior;

class CitySpec extends ObjectBehavior
{
    private const CITY_NAME = 'CityA';

    public function let()
    {
        $this->beConstructedWith(self::CITY_NAME);
    }

    public function it_is_initializable(): void
    {
        $this->shouldHaveType(City::class);
    }

    public function it_has_name(): void
    {
        $this->name->shouldBe(self::CITY_NAME);
    }
}
