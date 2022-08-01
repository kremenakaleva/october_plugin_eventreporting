<?php namespace Pensoft\EventReporting\Models;

use Model;

/**
 * Model
 */
class EventsreportingAttendants extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pensoft_eventreporting_attendants';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'event' => 'Pensoft\Eventreporting\Models\EventsreportingData',
        'user' => 'Rainlab\User\Models\User'
    ];
}
