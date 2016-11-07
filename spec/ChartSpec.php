<?php

namespace spec\Luna\Chart;

use Luna\Chart\Chart;
use Luna\Chart\Exceptions\MissingChartTypeException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ChartSpec extends ObjectBehavior
{

    const TYPE = 'pie';

    /**
     * @test
     */
    function it_is_initializable()
    {
        $this->shouldHaveType(Chart::class);
    }

    /**
     * @test
     */
    function it_should_have_a_chart_type()
    {
        $this->shouldThrow('Luna\Chart\Exceptions\MissingChartTypeException')->during('__construct', [null]);
    }

    /**
     * @test
     */
    function it_should_implement()
    {
        $this->shouldImplement('Luna\Chart\ChartInterface');
    }

    /**
     * @test
     */
    function type_should_be_a_string()
    {
        $this->beConstructedWith(self::TYPE);

        $this->getType()->shouldBeString();
    }

}
