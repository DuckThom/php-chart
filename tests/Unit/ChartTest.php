<?php

namespace Luna\Chart\Tests;

use Luna\Chart\Chart;
use \PHPUnit\Framework\TestCase;

class ChartTest extends TestCase
{

    const TYPE = 'type';

    /**
     * @test
     * @expectedException \Luna\Chart\Exceptions\MissingChartTypeException
     */
    public function exceptionIsThrownIfNoTypeIsGiven()
    {
        new Chart;
    }

    /**
     * @test
     * @return void
     */
    public function shouldReturnChartType()
    {
        $chart = new Chart(self::TYPE);
        $this->assertEquals(self::TYPE, $chart->getType());
    }

}