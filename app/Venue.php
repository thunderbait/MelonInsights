<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use App\Lead;
use App\EventInstance;

use App\SicDivision;

use Illuminate\Support\Arr;

class Venue extends Model
{
    // This is to initalize the location points
    use SpatialTrait;
      
    protected $fillable = [
        'name', 'country_code', 'description', 'website_url', 'max_capacity', 'break_out_rooms', 'square_meter',
    ];

    protected $spatialFields = [
        'location'
    ];

    protected $appends = [
        'all_room_styles', 's_strengths', 'location_geo'
    ];

    /*
        Relationship: Many to Many
        Return: Collection
    */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

     /*
        Relationship: Many to One
        Return: Collection
    */
    public function rooms()
    {
        return $this->hasMany(Room::class)->with('capRoomStyles');
    }

     /*
        Relationship: One to Many
        Return: Collection
    */
    public function leads() 
    {
        return $this->hasMany(Lead::class);
    }


    public function getFilteredLeads(Array $options){
        //Getting all the leads of this venue
        $allLeads = $this->leads;


        $first = $this->leads->first();

        $year = Arr::get($options, 'year');

        //Then filter through all the leads to fit the option
        return $allLeads->filter(function($lead) use ($year) {
            return (date('Y',strtotime($lead->eventInstance->date_start)) == $year);
        });
    }

    public function getSStrengthsAttribute()
    {
        $ss = [
            "first" => SicDivision::find(1),
            "middle" => SicDivision::find(2),
            "last" => SicDivision::find(3), 
        ];

        return $ss;
    }

    // Setting the sector stregth values
    public function getSectorStregthsAttribute()
    {
        $ss = [
            "first" => SicDivision::find(1),
            "middle" => SicDivision::find(2),
            "last" => SicDivision::find(3), 
        ];

        return $ss;
    } 

    
    public function getAllRoomStylesAttribute()
    {
        $styles = Style::all();

        $styleNames = [];

        foreach($styles as $style){
            array_push($styleNames, $style->name);
        }

        return $styleNames;
    }

    // Returns a collection of all location points of past instances
	public function getLocationPointsAttribute()
	{        
        return $this->location;
    }
    
    //Getting the location points in a LineString format
    public function getLocationsLineStringAttribute(): LineString
	{
		return new LineString($this->getLocationPointsAttribute());
    }

    public function getLocationGeoAttribute()
    {
        return "https://api.mapbox.com/styles/v1/mapbox/light-v9/static/url-https%3A%2F%2Fwww.mapbox.com%2Fimg%2Frocket.png(". $this->location->getLat()."," . $this->location->getLng() . ")/". $this->location->getLat()."," . $this->location->getLng() .",13/1000x1000?access_token=pk.eyJ1Ijoia2VsbHlkb3Rqb25lcyIsImEiOiJjazJhZHJjZ2QyajNlM2xtejRha2NnYTRwIn0.EB9jKl3gdWrOF9gA9vQmLQ";
        
    }
}
