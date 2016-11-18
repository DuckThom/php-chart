<?php

namespace Luna\Chart\Tests\Unit;

use Luna\Chart\ChartBuilder;
use Luna\Chart\Types\Pie;
use PHPUnit\Framework\TestCase;

class ChartBuilderTest extends TestCase
{
    /**
     * @test
     */
    public function testIfSettingsAreReturned()
    {
        $builder = new ChartBuilder;

        $this->assertEquals([], $builder->getSettings());
    }
}