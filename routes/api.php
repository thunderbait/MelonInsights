<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
-----------------LEAD API-----------------
*/
/*OVERALL LEADS*/

//Gets all the leads in the database
Route::get('/leads', 'Leads\LeadController@index')->name('leads');
//__________________________________________________________________________________________\\


/*VENUE LEADS*/

//Gets all the leads that belong to the passed venue
Route::get('/{venue}/leads', 'Leads\VenueLeadController@index')->name('venues.leads');
//__________________________________________________________________________________________\\


/*USER SAVED LEADS*/

//Saves a lead to the current user
Route::post('/{user}/leads/saved', 'Leads\UserSavedLeadController@store')->name('user.leads.store');
//Gets all the leads that passed in user has saved
Route::get('/{user}/leads/saved', 'Leads\UserSavedLeadController@index')->name('user.leads');
//__________________________________________________________________________________________\\



/*
-----------------EVENTS API-----------------
*/
/*OVERALL EVENT INSTANCES*/
Route::post('/event/instance/old/{event}', 'Events\EventInstanceController@storeOld')->name('events.instance.old.store');
Route::post('/event/{organisation}/{eventType}', 'Events\EventController@store')->name('events.store');
Route::post('/event/instance/new/{event}', 'Events\EventInstanceController@storeNew')->name('events.instance.new.store');



/*
-----------------VENUE API-----------------
*/
/*OVERALL VENUE*/
Route::get('/venue/{id}', 'Venue\VenueController@show')->name('venue.show');



/*
-----------------USER API-----------------
*/
/*OVERALL USER*/
Route::get('/user/{id}', 'User\UserController@show')->name('user.show');