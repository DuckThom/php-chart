<?php

namespace spec\Luna\Chart\Exceptions;

use Luna\Chart\Exceptions\MissingChartTypeException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MissingChartTypeExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MissingChartTypeException::class);
    }

    function it_should_implement_exception()
    {
        $this->shouldBeAnInstanceOf(\Exception::class);
    }
}
