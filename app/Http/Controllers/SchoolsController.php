<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $school = new Schools;
        $school->name = $request->name;
        $school->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schools  $schools
     * @return \Illuminate\Http\Response
     */
    public function show(Schools $schools)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schools  $schools
     * @return \Illuminate\Http\Response
     */
    public function edit(Schools $schools)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schools  $schools
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schools $schools)
    {
        $school = Schools::find($schools)->first();
        $school->name = $request->name;
        $school->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schools  $schools
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schools $schools)
    {
        $school = Schools::find($schools)->first();
        $school->delete();
        
        return redirect()->back();
    }
}
