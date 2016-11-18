<?php

namespace Luna\Chart\Types;

use Luna\Chart\Chart;

class Pie extends Chart
{
    /**
     * Make sure this pie is not edible.
     *
     * @return bool
     */
    public function isEdible()
    {
        return false;
    }
}
