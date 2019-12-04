<?php

namespace App\Http\Controllers\Leads;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Lead;
use App\Venue;

class VenueLeadController extends Controller
{
    //Get all the leads the belong to the passed in venue
    public function index(Venue $venue, Request $request)
    {
        //Get the options from the Request into an array
        $options = $request->only(['year']);

        //if there are options, such as filters, then return those leads
        if($options){
            //return those filtered leads
           return $venue->getFilteredLeads($options);
        }
        //return all leads that belong to this venue
        return $venue->leads;
    }
}
