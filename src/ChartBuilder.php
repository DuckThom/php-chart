<?php

namespace Luna\Chart;

use Luna\Chart\Contracts\Chart as ChartContract;
use Luna\Chart\Exceptions\MissingChartTypeException;
use Luna\Chart\Contracts\ChartBuilder as ChartBuilderContract;

class ChartBuilder implements ChartBuilderContract
{
    /**
     * @var Chart
     */
    protected $chart;

    /**
     * @var array
     */
    protected $settings = [];

    /**
     * ChartBuilder constructor.
     *
     * @param  Chart  $chart
     * @throws MissingChartTypeException
     */
    public function __construct($chart = null)
    {
        if ($chart instanceof Chart) {
            $this->chart = $chart;
        }
    }

    /**
     * Get global ChartJS settings.
     *
     * @return array
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Get the stored chart.
     *
     * @return Chart|null
     */
    public function getChart()
    {
        return $this->chart;
    }

    /**
     * @param  ChartContract  $chart
     * @return $this
     */
    public function setChart(ChartContract $chart)
    {
        $this->chart = $chart;

        return $this;
    }

    /**
     * Render the chart.
     *
     * @throws MissingChartTypeException
     * @return string
     */
    public function renderChart()
    {
        if ($this->getChart() === null) {
            throw new MissingChartTypeException;
        }

        return $this->getChart()->renderHtml();
    }
}
