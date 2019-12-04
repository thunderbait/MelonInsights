<?php

namespace App;


use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Grimzy\LaravelMysqlSpatial\Types\LineString;
use Grimzy\LaravelMysqlSpatial\Types\Polygon;

class Event extends Model
{
    protected $fillable = [
        'name', 'description', 'mapbox_geo_json'
    ];

    use SpatialTrait;
    protected $spatialFields = ['location_points', 'locations_line_string', 'locations_polygon'];

    /*
        Relationship: One to Many
        Return: Collection
    */
    public function eventType() 
    {
        return $this->belongsTo(EventType::class);
    }

     /*
        Relationship: One to Many
        Return: Collection
    */
    public function organisation() 
    {
        return $this->belongsTo(Organisation::class);
    }



    /*----------------------------------------------------------
    ----------------------EVENT INSTANCES-----------------------
    ----------------------------------------------------------*/

     /*
        Relationship: One to Many
        Return: Collection
    */
    public function eventInstances() 
    {
        return $this->hasMany(EventInstance::class);
    }

    // Gets all the event instances that are to come
    public function getEventInstancesFuture(){
         //Then filter through all instances to only get the ones which have not happened
         return $this->eventInstances->filter(function($instance){
            return $instance->happened == 0;
        });
    }

    // Gets all the event instances that have been past
    public function getEventInstancesPast()
    {
        //Then filter through all instances to only get the ones which have happened
        return $this->eventInstances->filter(function($instance){
            return $instance->happened;
        });
    }

    //get all the past years in an array
    private function getPastYearsArray()
    {
        $years = array();

        foreach($this->getEventInstancesPast() as $instance){
            array_push($years, $instance->getYear());
        }

        return $years;
    }


     //get all the past years inbetween in an array
     private function getPastYearsBetweenArray()
     {
         $years_between = array();

         $first_in = null;;

         
 
         foreach($this->getEventInstancesPast() as $key => $instance){
            if($key == 0)
                $first_in = $this->getEventInstancesPast()->first();
            else{
                $between = $instance->getYear() - $first_in->getYear();
                array_push($years_between, $between);
                $first_in = $instance;
            }
         }
 
         return $years_between;
     }

    //get all the amount days of the past events in an array
    private function getPastDaysArray()
    {
        $days = array();

        foreach($this->getEventInstancesPast() as $instance){
            array_push($days, $instance->getDays());
        }

        return $days;
    }

    // Getting all the past start dates into an array
    private function getPastStartDatesArray(){
        $start_days = array();

        foreach($this->getEventInstancesPast() as $instance){
            $start =  Carbon::parse($instance->date_start);
            array_push($start_days, $start->day);
        }

        return $start_days;
    }

     // Getting all the past months into an array
     private function getPastStartMonthsArray(){
        $months = array();

        foreach($this->getEventInstancesPast() as $instance){
            $start =  Carbon::parse($instance->date_start);
            array_push($months, $start->month);
        }

        return $months;
    }




    /*----------------------------------------------------------
    ---------------------SCORE FEATURES-------------------------
    ----------------------------------------------------------*/

    //Get the frequency from previous events, returns an integer
    public function getFrequency()
    {
        //As default, the fequency is one, we are assuming that if they have just one previous events, then it is just going to be one
        $frequency = 1;

        //Check if there are any past events is more than just one
        if($this->getEventInstancesPast()->count() > 1){
            $frequency = $this->array_mode($this->getPastYearsBetweenArray());
        }

        return $frequency;
    }


    // Get the common month it is spent in
    public function getCommonMonth(){
       return $this->array_mode($this->getPastStartMonthsArray());
    }

    // Get the common start date
    public function getCommonStartDate(){
        return $this->array_mode($this->getPastStartDatesArray());
    }

    // Get the common amount of days
    public function getCommonDays(){
        return $this->array_mode($this->getPastDaysArray());
    }



    // This get's the mode of an array (the most common number in an array)
    private function array_mode($arr) {
        // Count is a temp array that counts the values
        $count = array();

        //Go through each element of the passed array, count how many each value has
        foreach ((array)$arr as $val) {
            //If the value is not in the temp array add a null to the count array
            if (!isset($count[$val])) { $count[$val] = 0; }
          
            //Incriment the val place in the array
            $count[$val]++;
        }

        //Sort from hightest to lowest
        arsort($count);

        //key() returns the index element of the current array position.
        return key($count);
    }


    /*----------------------------------------------------------
    ----------------------LOCATIONS-----------------------------
    ----------------------------------------------------------*/

    //Get all previous Venues this event has been at
    public function getLastLocations(){
        $venues =  new Collection;

        foreach($this->eventInstances as $eventIn){
            $venues->push(array("location"=>$eventIn->getVenue()->country_code,"venue"=>$eventIn->getVenue()->name));
        }

        return $venues;
    }


    // Returns a collection of all location points of past instances
	public function getLocationPointsAttribute()
	{
        $pastInstances = $this->getEventInstancesPast();

        $locations = array();

        foreach($pastInstances as $instance){
            array_push($locations, $instance->getVenue()->location);
        }
        
        return $locations;
    }

    
    // Getting the location points in a Json format
    public function getLocationPointsJsonAttribute(): string
	{
		return $this->location_points->toJson();
    }

    
    //Getting the location points in a LineString format
    public function getLocationsLineStringAttribute(): LineString
	{
		return new LineString($this->getLocationPointsAttribute());
    }

    
    // This is making the Line String of Location in a Json Format
    public function getLocationsLineStringJsonAttribute(): string
	{
		return $this->locations_line_string->toJson();
    }

    
    /**
	 * @link https://docs.mapbox.com/api/maps/#retrieve-a-static-map-from-a-style
	 *       Use for Mapbox static map source tag when using VueJs (v-bind:src="lead.mapbox_geo_json")
	 * @link https://studio.mapbox.com/
	 *      Using custom mapbox style: mela-maff/ck0lixxe201la1cp3itc3p3kx
	 *
	 * 
	 */
	public function getMapboxGeoJsonAttribute()
	{ 
      return 'https://api.mapbox.com/styles/v1/mapbox/light-v9/static/geojson('
 		    . $this->locations_line_string_json
	 		. ')/auto/1280x800?access_token=pk.eyJ1Ijoia2VsbHlkb3Rqb25lcyIsImEiOiJjazJhZHJjZ2QyajNlM2xtejRha2NnYTRwIn0.EB9jKl3gdWrOF9gA9vQmLQ';        
    }

}
