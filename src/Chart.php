<?php

namespace Luna\Chart;

use Luna\Chart\Interfaces\Chart as ChartInterface;

abstract class Chart implements ChartInterface
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var array
     */
    protected $settings = [];

    /**
     * Get the chart type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get chart settings.
     *
     * @return array
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Set chart settings.
     *
     * @param  array  $settings
     * @return $this
     */
    public function setSettings($settings = [])
    {
        $this->settings = array_merge($this->settings, $settings);

        return $this;
    }

    /**
     * Render the chart HTML.
     *
     * @return string
     */
    public function renderHtml()
    {
        return $this->_toChartHtml();
    }
}
