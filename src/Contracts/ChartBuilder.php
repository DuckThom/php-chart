<?php

namespace Luna\Chart\Contracts;

use Luna\Chart\Chart;
use Luna\Chart\Contracts\Chart as ChartContract;
use Luna\Chart\Exceptions\MissingChartTypeException;

interface ChartBuilder
{
    /**
     * ChartBuilder constructor.
     */
    function __construct();

    /**
     * Get global ChartJS settings.
     *
     * @return array
     */
    function getSettings();

    /**
     * Get the stored chart.
     *
     * @return Chart|null
     */
    function getChart();

    /**
     * Set the chart.
     *
     * @param  ChartContract  $chart
     * @return $this
     */
    function setChart(ChartContract $chart);

    /**
     * Render the chart HTML.
     *
     * @throws MissingChartTypeException
     * @return string
     */
    function renderChart();
}