<?php

namespace spec\Luna\Chart;

use Luna\Chart\ChartBuilder;
use Luna\Chart\Interfaces\Chart as ChartInterface;
use Luna\Chart\Interfaces\ChartBuilder as ChartBuilderInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ChartBuilderSpec extends ObjectBehavior
{
    const TYPE = 'pie';

    /**
     * @test
     */
    function it_is_initializable()
    {
        $this->shouldHaveType(ChartBuilder::class);
    }

    /**
     * @test
     */
    function it_should_have_a_chart_type()
    {
        $this->shouldThrow('Luna\Chart\Exceptions\ChartNotSetException')->during('renderChart');
    }

    /**
     * @test
     */
    function it_should_implement()
    {
        $this->shouldImplement(ChartBuilderInterface::class);
    }

    /**
     * @test
     */
    function type_should_be_a_string()
    {
        $this->getType()->shouldBeString();
    }

    /**
     * @test
     */
    function it_should_have_global_settings()
    {
        $this->getSettings()->shouldBeArray();
    }

    /**
     * @test
     */
    function it_should_set_global_settings()
    {
        $this->setSettings([])->shouldReturnAnInstanceOf(ChartBuilder::class);
    }

    /**
     * @test
     * @param $chart
     */
    function it_should_be_able_to_return_html($chart)
    {
        $chart->beADoubleOf(ChartInterface::class);
        $chart->renderHtml()->willReturn("<p>Hello, World</p>");

        $this->setChart($chart)->renderChart()->shouldBeString();
    }
}
