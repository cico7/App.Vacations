<?php

namespace App\Http\Controllers;

use App\Models\group1;
use Illuminate\Http\Request;

class Group1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group1=group1::All();
        return view('group1.index', ['group1' => $group1]);
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
     * @param  \App\Models\group1  $group1
     * @return \Illuminate\Http\Response
     */
    public function show(group1 $group1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\group1  $group1
     * @return \Illuminate\Http\Response
     */
    public function edit(group1 $group1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\group1  $group1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, group1 $group1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\group1  $group1
     * @return \Illuminate\Http\Response
     */
    public function destroy(group1 $group1)
    {
        //
        $group1->delete();
        return redirect()->back();
    }
}
