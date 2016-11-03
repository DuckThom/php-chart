<?php

namespace Luna\Chart;

use Luna\Chart\Exceptions\MissingChartTypeException;

class Chart implements ChartInterface
{

    /**
     * @var string
     */
    protected $type;

    /**
     * Chart constructor.
     *
     * @param  string  $chartType
     * @throws MissingChartTypeException
     */
    public function __construct($chartType = null)
    {
        if ($chartType === null) {
            throw new MissingChartTypeException;
        }

        $this->type = $chartType;
    }

    /**
     * Get the chart type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

}
