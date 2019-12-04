<?php

namespace App\Http\Controllers\Leads;

use App\Http\Controllers\Controller;
use App\UserSavedLead;
use App\User;
use Illuminate\Http\Request;

class UserSavedLeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        //
        return $user->userSavedLeads;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userSavedLead = new UserSavedLead;

        $userSavedLead->saved = $request->saved;
        $userSavedLead->user_id = $request->user;
        $userSavedLead->lead_id = $request->lead;

        $userSavedLead->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserSavedLead  $userSavedLead
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return UserSavedLead::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserSavedLead  $userSavedLead
     * @return \Illuminate\Http\Response
     */
    public function edit(UserSavedLead $userSavedLead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserSavedLead  $userSavedLead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $userSavedLead = UserSavedLead::find($id);

        $userSavedLead->saved = $request->saved;

        $userSavedLead->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserSavedLead  $userSavedLead
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSavedLead $userSavedLead)
    {
        //
    }
}
