<?php namespace Pensoft\Eventreporting\Components;

use Auth;
use Cms\Classes\ComponentBase;
use Cms\Classes\Theme;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use October\Rain\Exception\ValidationException;
use October\Rain\Support\Facades\Flash;
use Pensoft\EventReporting\Models\EventsreportingAttendants;
use Pensoft\EventReporting\Models\EventsreportingData;

/**
 * EventAttendanceForm Component
 */
class EventAttendanceForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'EventAttendanceForm Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
        $this->addCss('assets/css/style.css');

        $user = Auth::getUser();
        if($user){
            $theme = Theme::getActiveTheme();
            $this->page['user'] = $user;
            $this->page['events'] = EventsreportingData::orderBy('created_at', 'DESC')->get();
        }else{
            return Redirect::to('/');
        }

    }

    public function onSubmit(){
        $user = Auth::getUser();

        if(!$user->id){
            return Redirect::to('/');
        }
        $validator = Validator::make(
            $form = \Input::all(), [
                'user_id' => 'required',
                'event_id' => 'required',
            ]
        );

        if($validator->fails()){
            throw new ValidationException($validator);
        }

        $user_id = \Input::get('user_id');
        $event_id = \Input::get('event_id');

        $eventAttendance = new EventsreportingAttendants();
        $eventAttendance->user_id = $user_id;
        $eventAttendance->event_id = $event_id;
        $eventAttendance->save();

        Flash::success('Thank you!');
        return \Redirect::to('/event-attendance-planner-success');
    }
}
