<?php

namespace Luna\Chart;

use Luna\Chart\Interfaces\Chart as ChartInterface;
use Luna\Chart\Exceptions\ChartNotSetException;
use Luna\Chart\Interfaces\ChartBuilder as ChartBuilderInterface;

class ChartBuilder implements ChartBuilderInterface
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
     */
    public function __construct($chart = null)
    {
        if ($chart instanceof Chart) {
            $this->chart = $chart;
        }
    }

    /**
     * Set global ChartJS settings.
     *
     * @param  array  $settings
     * @return $this
     */
    public function setSettings(array $settings)
    {
        $this->settings = array_merge($this->settings, $settings);

        return $this;
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
     * @param  ChartInterface  $chart
     * @return $this
     */
    public function setChart(ChartInterface $chart)
    {
        $this->chart = $chart;

        return $this;
    }

    /**
     * Render the chart.
     *
     * @throws ChartNotSetException
     * @return string
     */
    public function renderChart()
    {
        if ($this->getChart() === null) {
            throw new ChartNotSetException;
        }

        return $this->getChart()->renderHtml();
    }
}
