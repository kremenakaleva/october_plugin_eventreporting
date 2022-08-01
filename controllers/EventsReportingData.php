<?php namespace Pensoft\EventReporting\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class EventsReportingData extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];

    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Pensoft.Eventreporting', 'main-menu-item', 'side-menu-item');
    }
}
