<?php

namespace Luna\Chart\Tests\Functional;

use Luna\Chart\Types\Pie;
use Luna\Chart\ChartBuilder;
use PHPUnit\Framework\TestCase;

class ChartBuilderTest extends TestCase
{
    /**
     * @test
     */
    public function setChartItWasConstructedWith()
    {
        $builder = new ChartBuilder((new Pie));

        $this->assertInstanceOf(Pie::class, $builder->getChart());
    }

    /**
     * @test
     */
    public function testIfSettingsCanBeSet()
    {
        $builder = new ChartBuilder;
        $builder->setSettings(['test']);

        $this->assertEquals(['test'], $builder->getSettings());
    }

    /**
     * @test
     * @expectedException \Luna\Chart\Exceptions\ChartNotSetException
     */
    public function shouldReceiveErrorWhenNoChartIsSetWhenRendering()
    {
        $builder = new ChartBuilder;

        $builder->renderChart();
    }
}