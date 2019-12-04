<?php

namespace App\Http\Controllers\Events;

use App\Event;
use App\EventInstance;

use Carbon\Carbon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventInstanceController extends Controller
{
    // Make sure that the request being sent in has these parameters
    // $request = 'id', 'name', 'date_start', 'date_end', 'participants', 'happened'

    //This creates only previous event instances that have already happened
    //If there is an enter of future date, then it returns null
    public function storeOld(Event $event = null, Request $request)
    {
        //If there is an event alreay in the database that is this event, then just update it's details
        $instance = EventInstance::where('name', '=', $request->name)->where('event_id', '=', $event->id)->first();
        if ($instance) {
            // There is already an event just updated it
            return $this->update($event, $instance, $request);
        }

        $newInstance = null;
        //If there is already an event that this instance will belong to
        if($event && $request->date_start < Carbon::now() && $request->happened == 1){
            $newInstance = new EventInstance();

            $newInstance->name = $request->name;
            $newInstance->date_start = $request->date_start;
            $newInstance->date_end = $request->date_end;
            $newInstance->participants = $request->participants;
            $newInstance->event_id = $event->id;
            $newInstance->happened = 1;

            $newInstance->save();
        }

        // Every time an instance is entered, there must be a create new method call

        //if there is no event, return null, which should then lead you to create new event
        return $newInstance;
    }





    /*
        This is going to create future events
    */
    public function storeNew(Event $event)
    {
        $frequency = $event->getFrequency();
        $last_instance = $event->getEventInstancesPast()->first();


        //First it is going to check if there are any future events
        if($event->getEventInstancesFuture()->count() == 0){
            //If there is none
            //Add event instances for up to 10 years at this event's frequency
            $commom_start_date = $event->getCommonStartDate();
            $common_days = $event->getCommonDays();
            $common_month = $event->getCommonMonth();
            $year = $last_instance->getYear();
            $new_end = $commom_start_date + $common_days;

            //For ten times
            for($i=0; $i < 10; $i++){

                // Increment the year by the frequency
                $year = $year + $frequency;
                
                // Set the start date
                $start_date = $year . "-" . $common_month . "-" . $commom_start_date;
                $end_date = $year . "-" . $common_month . "-" . $new_end;


                $newInstance = new EventInstance();

                $newInstance->name = $last_instance->name;

                $newInstance->date_start = date_create($start_date);
                $newInstance->date_end = date_create($end_date);
                $newInstance->participants = $last_instance->participants;
                $newInstance->event_id = $event->id;
                $newInstance->happened = 0;

                $newInstance->save();
            }

            return "true";
        }

            //if NOT
            
                //Simpy add the amount of events at the event frequency for up to 10 years from now

            //if YES - there are future events already

                //Check if there enough events for up to 10 years from now

                    //If NOT
                        //Add enough future events at the right fequency to make it so
        return "false";
                    
    }



    /*
        Make sure that the request being sent in has these parameters
        $request = 'id', 'name', 'date_start', 'date_end', 'participants', 'happened'
    */
    public function update(Event $event = null, EventInstance $instance, Request $request)
    {
        //Making sure that there is an event that exsists for this instance to relate to
        //Making sure that there is an instance that was found in the database
        if($event && $instance){
            $instance->name = $request->name;
            $instance->date_start = $request->date_start;
            $instance->date_end = $request->date_end;
            $instance->participants = $request->participants;
            $instance->event_id = $event->id;
            $instance->happened = $request->happened;

            $instance->save();
        }

        return $instance;
    }
}