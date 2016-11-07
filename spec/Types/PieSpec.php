<?php

namespace spec\Luna\Chart\Types;

use Luna\Chart\Types\Pie;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PieSpec extends ObjectBehavior
{

    /**
     * @test
     */
    function it_is_initializable()
    {
        $this->shouldHaveType(Pie::class);
    }

    /**
     * @test
     */
    function it_should_not_be_edible()
    {
        $this->shouldNotBeEdible();
    }

}
