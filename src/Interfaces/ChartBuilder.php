<?php

namespace Luna\Chart\Interfaces;

use Luna\Chart\Interfaces\Chart as ChartInterface;
use Luna\Chart\Exceptions\ChartNotSetException;

interface ChartBuilder
{
    /**
     * ChartBuilder constructor.
     */
    public function __construct();

    /**
     * @param  array  $settings
     * @return mixed
     */
    public function setSettings(array $settings);

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
     * @param  ChartInterface  $chart
     * @return $this
     */
    public function setChart(ChartInterface $chart);

    /**
     * Render the chart HTML.
     *
     * @throws ChartNotSetException
     * @return string
     */
    public function renderChart();
}
