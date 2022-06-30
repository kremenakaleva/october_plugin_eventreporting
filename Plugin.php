<?php namespace Pensoft\EventReporting;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = [
        'pensoft.calendar'
    ];

    public function registerComponents()
    {
        return [
            'Pensoft\EventReporting\Components\EventReportingForm' => 'EventReportingForm',
        ];
    }

    public function registerSettings()
    {
    }
}
