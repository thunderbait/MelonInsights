<?php

namespace App\Http\Controllers\Organisation;

use App\Organisation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    //
    public function store(Request $request)
    {
        $newOrganisation = new Organisation();
        
        $newOrganisation->name = $request->name;
        $newOrganisation->description = $request->description;
        $newOrganisation->member_size = $request->member_size;
        $newOrganisation->year_founded = $request->year_founded;
        $newOrganisation->website_url = $request->website_url;
        $newOrganisation->image = $request->image;

        $newOrganisation->save();
    }
}
