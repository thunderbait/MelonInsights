<?php

namespace App\Http\Controllers\Venue;

use App\Venue;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    //
    public function index()
    {
        return Venue::all();
    }

    public function show($id)
    {
        return Venue::find($id)->load(['users', 'rooms']);
    }
}
