<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Leads
Route::get('/leads/new', 'Views\LeadController@index')->name('leads.new');

// Show Venue Options
Route::get('/leads/venue/options', 'Views\LeadController@optionIndex')->name('leads.venue.options');

// Venue Profile
Route::get('/profile/venue', 'Views\ProfileController@indexVenue')->name('venue.profile');

// User Profile
Route::get('/profile/user', 'Views\ProfileController@indexUser')->name('user.profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
