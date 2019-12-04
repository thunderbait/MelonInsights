<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use App\Venue;

class ProfileController extends Controller
{
    //
    public function indexVenue(Request $request)
    {
        $venueId = $request->id;
        return view('profiles.venue', compact('venueId'));
    }

    public function indexUser(Request $request){
        $userId = Auth::id();
        return view('profiles.user', compact('userId'));
    }
}

