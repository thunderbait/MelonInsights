<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    //
    protected $fillable = [
        'saved', 
    ];

    protected $appends = [
        'last_score', 'organisation', 'event_name', 'event_description', 'organisation_image',  'last_locations', 'sic_divisions', 'mapbox_geo_json'
     ];

    /*
        Relationship: One to Many
        Return: Collection
    */
    public function eventInstance() 
    {
        return $this->belongsTo(EventInstance::class);
    }

     /*
        Relationship: One to Many
        Return: Collection
    */
    public function venue() 
    {
        return $this->belongsTo(Venue::class);
    }

    
     /*
        Relationship: One to Many
        Return: Collection
    */
    public function leadScores() 
    {
        return $this->hasMany(LeadScore::class);
    }
    

    /*
        Relationship: One to Many
        Return: Collection
    */
    public function userSavedLeads() 
    {
        return $this->hasMany(UserSavedLead::class);
    }


    public function getLastScoreAttribute(){
        //Returning the most recent scores
        return $this->leadScores->last();
    }

    public function getOrganisationAttribute(){
        //return this event's organisation name
        return $this->eventInstance->event->organisation->name;
    }

    public function getEventNameAttribute(){
        //return this event's name
        return $this->eventInstance->event->name;
    }

    public function getEventDescriptionAttribute(){
        //return this event's description
        return $this->eventInstance->event->description;
    }

    public function getOrganisationImageAttribute(){
        //return this event's organisation image
        return $this->eventInstance->event->organisation->image;
    }

    public function getLastLocationsAttribute(){
        //return all locations from the this event
        return $this->eventInstance->event->getLastLocations();
    }

    public function getSicDivisionsAttribute(){
        //return all sic divisions that this event has
        $sics = array();

        $divisions = $this->eventInstance->sicDivisions;

        foreach($divisions as $sicDiv){
           array_push($sics, array('name' => $sicDiv->name, 'section_image' => $sicDiv->sicSection->image));
        }

        return $sics;
    }

    public function getMapboxGeoJsonAttribute()
    {
        return $this->eventInstance->event->mapbox_geo_json;
    }

}
