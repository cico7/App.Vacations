<?php

namespace App\Http\Controllers;

use App\Models\group_member;
use Illuminate\Http\Request;

class GroupMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group_member=group_member::All();
        return view('group_member.index', ['group_member' => $group_member]);
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\group_member  $group_member
     * @return \Illuminate\Http\Response
     */
    public function show(group_member $group_member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\group_member  $group_member
     * @return \Illuminate\Http\Response
     */
    public function edit(group_member $group_member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\group_member  $group_member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, group_member $group_member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\group_member  $group_member
     * @return \Illuminate\Http\Response
     */
    public function destroy(group_member $group_member)
    {
        //
        $group_member->delete();
        return redirect()->back()->with('Successfully Deleted!');
        
    }
}
