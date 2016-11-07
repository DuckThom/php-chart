<?php

namespace Luna\Chart\Tests;

use Luna\Chart\Chart;

class ChartTest extends \PHPUnit_Framework_TestCase
{

    const TYPE = 'type';

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