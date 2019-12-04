<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeadScore extends Model
{
    //
    protected $fillable = [
        'venue_specs', 'value', 'sector', 'proj_max_capacity', 'proj_exhibition', 'proj_break_outs', 'preferred_month', 'year_interval', 'proj_participants', 'proj_days', 'proj_rooms'
    ];

    protected $appends = [
        'value_max',
     ];


    /*
        Relationship: One to Many
        Return: Collection
    */
    public function lead() 
    {
        return $this->belongsTo(Lead::class);
    }

    public function getValueMaxAttribute()
    {
        //get the number of rooms event used

        //get the number of days of lead


    }

    // NOTE: Remember that the value for each event is made by taking the number of rooms it would use by the number of days
}
