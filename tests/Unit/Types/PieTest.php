<?php

namespace Luna\Chart\Tests\Unit\Types;

use Luna\Chart\Types\Pie;
use \PHPUnit\Framework\TestCase;

class PieTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function testIfPieIsNotEdible()
    {
        $pie = new Pie;

        $this->assertFalse($pie->isEdible());
    }
}