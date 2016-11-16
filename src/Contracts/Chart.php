<?php

namespace Luna\Chart\Contracts;

interface Chart
{
    /**
     * Get the chart type
     *
     * @return string
     */
    public function getType();

    /**
     * Get the global ChartJS settings
     *
     * @return array
     */
    public function getSettings();

    /**
     * Set global ChartJS settings
     *
     * @param  array  $settings
     * @return $this
     */
    public function setSettings($settings = []);
}
