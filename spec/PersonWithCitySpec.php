<?php

namespace spec\App;

use App\City;
use App\PersonWithCity;
use PhpSpec\ObjectBehavior;

class PersonWithCitySpec extends ObjectBehavior
{
    private const NAME = 'Foo';
    private const AGE = 30;
    private const CITY_NAME = 'CityA';

    public function let(): void
    {
        $this->beConstructedWith(
            self::NAME,
            self::AGE,
            new City(self::CITY_NAME),
        );
    }

    public function it_is_initializable(): void
    {
        $this->shouldHaveType(PersonWithCity::class);
    }

    public function it_is_equal_by_value(): void
    {
        $newPersonWithCity = new PersonWithCity(
            self::NAME,
            self::AGE,
            new City(self::CITY_NAME)
        );

        $this->isEqual($newPersonWithCity)->shouldBe(true);
    }

    public function it_is_equal_by_value_negative_test(): void
    {
        $newPersonWithCity = new PersonWithCity(
            self::NAME,
            self::AGE,
            new City('Bar')
        );

        $this->isEqual($newPersonWithCity)->shouldBe(false);
    }
}
