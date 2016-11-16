<?php

namespace Luna\Chart\Tests;

use Luna\Chart\ChartBuilder;
use \PHPUnit\Framework\TestCase;

class ChartBuilderTest extends TestCase
{

    const TYPE = 'type';

    /**
     * @test
     * @expectedException \Luna\Chart\Exceptions\MissingChartTypeException
     */
    public function exceptionIsThrownIfNoTypeIsGiven()
    {
        new ChartBuilder;
    }

    /**
     * @test
     * @return void
     */
    public function shouldReturnChartType()
    {
        $chart = new ChartBuilder(self::TYPE);
        $this->assertEquals(self::TYPE, $chart->getType());
    }

}