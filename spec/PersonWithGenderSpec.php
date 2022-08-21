<?php

declare(strict_types=1);

namespace spec\App;

use App\Gender;
use App\PersonWithGender;
use PhpSpec\ObjectBehavior;

class PersonWithGenderSpec extends ObjectBehavior
{
    private const NAME = 'Foo';
    private const AGE = 30;

    public function let(): void
    {
        $this->beConstructedWith(
            self::NAME,
            self::AGE,
            new Gender(Gender::FEMALE),
        );
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(PersonWithGender::class);
    }

    public function it_is_not_equal_by_value(): void
    {
        $newPerson = new PersonWithGender(
            self::NAME,
            self::AGE,
            new Gender(Gender::FEMALE),
        );

        $this->isEqual($newPerson)->shouldBe(false);
    }

    public function it_is_equal_by_reference(): void
    {
        $newPerson = new PersonWithGender(
            self::NAME,
            self::AGE,
            $this->gender->getWrappedObject(),
        );

        $this->isEqual($newPerson)->shouldBe(true);
    }
}
