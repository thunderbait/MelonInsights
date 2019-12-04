<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SicDivision extends Model
{
    protected $fillable = [
        'name', 'code',
    ];

    protected $appends = ['section_image'];

    /*
        Relationship: One to Many
        Return: Collection
    */
    public function sicSection() 
    {
        return $this->belongsTo(SicSection::class);
    }

    /*
        Relationship: Many to Many
        Return: Collection
    */
    public function eventInstances() 
    {
        return $this->belongsToMany(EventInstances::class);
    }

    public function getSectionImageAttribute(Type $var = null)
    {
        return $this->sicSection->image;
    }
}
