<?php

declare(strict_types=1);

namespace spec\App;

use App\Person;
use PhpSpec\ObjectBehavior;
use Sushi\ValueObject\Exceptions\ValueObjectException;

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

    public function its_props_are_ro(): void
    {
        try {
            $this->name = 'bar';
        } catch (\Throwable $e) {
        }
        $this->name->shouldEqual(self::NAME);
    }

    public function it_has_set_method(): void
    {
        $newPerson = $this->set(age: 40);
        $newPerson->age->shouldEqual(40);
        $this->age->shouldEqual(self::AGE);
    }

    public function it_has_the_same_keys(): void
    {
        $this
            ->shouldThrow(ValueObjectException::class)
            ->during('set', ['otherName' => 'foo']);
    }
}
