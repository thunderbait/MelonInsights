<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class EventInstance extends Model
{
    protected $fillable = [
        'name', 'date_start', 'date_end', 'participants', 'happened'
    ];

    /*
        Relationship: One to Many
        Return: Collection
    */
    public function event() 
    {
        return $this->belongsTo(Event::class);
    }

    /*
        Relationship: Many to Many
        Return: Collection
    */
    public function capRoomStyles() 
    {
        return $this->belongsToMany(CapRoomStyle::class);
    }

    /*
        Relationship: Many to Many
        Return: Collection
    */
    public function sicDivisions() 
    {
        return $this->belongsToMany(SicDivision::class);
    }

    /*
        Relationship: Many to Many
        Return: Collection
    */
    public function leads() 
    {
        return $this->hasMany(Lead::class);
    }

    //Return the venue that this event instance was at
    public function getVenue(){
        //Get the first room from the capacity room style list
        $firstRoom = $this->capRoomStyles->first();

        //return that room's venue
        return $firstRoom->room->venue;
    }

    public function getYear(){
        $start =  Carbon::parse($this->date_start);
        
        return $start->year;
    } 

    //Get the number of days this event is
    public function getDays()
    {
        $start =  Carbon::parse($this->date_start);
        $end =  Carbon::parse($this->date_end);
        
        return $end->diffInDays($start);
    }

}
