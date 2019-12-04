<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Venue;
use App\User;

class LeadController extends Controller
{
    //
    public function optionIndex(){
        //get all the venues for this Auth user
        $venues = User::find(Auth::id())->venues;
        //return view for this page
        return view('leads.venueoption', compact('venues'));
    }

    public function index(Request $request){
        //Get the venue that has been chosen
        $venue = Venue::find($request->id);

        return view('leads.newleads', compact('venue'));
    }
}
