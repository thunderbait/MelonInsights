<?php

namespace App\Http\Controllers\Events;

use App\Event;
use App\EventInstance;
use App\Organisation;
use App\EventType;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //$request = 'name', 'description'
    public function store(Organisation $organisation = null, EventType $eventType = null, Request $request)
    {
        $newEvent = null; 

        //If there are these two models exsisting the the database, then create a new event
        if($organisation && $eventType){
            $newEvent = new Event();
        
            $newEvent->name = $request->name;
            $newEvent->description = $request->description;
            $newEvent->event_type_id = $eventType->id;
            $newEvent->organisation_id = $organisation->id;

            $newEvent->save();

            //You can not create a new event with out creating at least one new instance
            
        }

        return $newEvent;      
    }
}
