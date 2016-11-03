<?php

namespace spec\Luna\Chart;

use Luna\Chart\Chart;
use Luna\Chart\Exceptions\MissingChartTypeException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ChartSpec extends ObjectBehavior
{

    const PIE_TYPE = 'pie';

    const LINE_TYPE = 'line';

    function it_should_have_a_chart_type()
    {
        $this->shouldThrow('Luna\Chart\Exceptions\MissingChartTypeException')->during('__construct', [null]);
    }

    function it_should_implement()
    {
        $this->shouldImplement('Luna\Chart\ChartInterface');
    }

    function it_should_return_type_it_was_instantiated_with()
    {
        $this->beConstructedWith(self::PIE_TYPE);

        $this->getType()->shouldBeLike(self::PIE_TYPE);
        $this->getType()->shouldNotBeLike(self::LINE_TYPE);
    }

}
