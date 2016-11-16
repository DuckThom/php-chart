<?php

namespace Luna\Chart\Contracts;

use Luna\Chart\Contracts\Chart as ChartContract;
use Luna\Chart\Exceptions\MissingChartTypeException;

interface ChartBuilder
{
    /**
     * ChartBuilder constructor.
     */
    public function __construct();

    /**
     * Get global ChartJS settings.
     *
     * @return array
     */
    public function getSettings();

    /**
     * Get the stored chart.
     *
     * @return \Luna\Chart\Chart|null
     */
    public function getChart();

    /**
     * Set the chart.
     *
     * @param  ChartContract  $chart
     * @return $this
     */
    public function setChart(ChartContract $chart);

    /**
     * Render the chart HTML.
     *
     * @throws MissingChartTypeException
     * @return string
     */
    public function renderChart();
}
