<?php

namespace Luna\Chart\Tests\Types;

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