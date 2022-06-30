<?php namespace Pensoft\EventReporting\Models;

use Model;

/**
 * Model
 */
class EventsreportingData extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sluggable;

    /**
     * @var array Generate slugs for these attributes.
     */
    protected $slugs = ['slug' => 'name'];


    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pensoft_eventreporting_data';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
