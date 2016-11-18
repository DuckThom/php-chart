<?php

namespace spec\Luna\Chart\Exceptions;

use Luna\Chart\Exceptions\ChartNotSetException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ChartNotSetExceptionSpec extends ObjectBehavior
{

    /**
     * @test
     */
    function it_is_initializable()
    {
        $this->shouldHaveType(ChartNotSetException::class);
    }

    /**
     * @test
     */
    function it_should_implement_exception()
    {
        $this->shouldBeAnInstanceOf(\Exception::class);
    }

}
