<?php

namespace Luna\Chart\Contracts;

interface Chart
{
    /**
     * Get the chart type
     *
     * @return string
     */
    function getType();

    /**
     * Get the global ChartJS settings
     *
     * @return array
     */
    function getSettings();

    /**
     * Set global ChartJS settings
     *
     * @param  array  $settings
     * @return $this
     */
    function setSettings($settings = []);

    /**
     * Render the chart HTML.
     *
     * @return string
     */
    function renderHtml();
}
