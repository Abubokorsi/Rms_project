<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations=Location::all();
        return view('admin.location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'map_link' => 'required',
            'location' => 'required',
            'open_hour' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $location= new Location();
        $location->map_link=$request->map_link;
        $location->location=$request->location;
        $location->open_hour=$request->open_hour;
        $location->email=$request->email;
        $location->phone=$request->phone;
        $location->save();

        return redirect()->route('Location.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location=Location::find($id);
        return view('admin.location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'map_link' => 'required',
            'location' => 'required',
            'open_hour' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $location=Location::find($id);
        $location->map_link=$request->map_link;
        $location->location=$request->location;
        $location->open_hour=$request->open_hour;
        $location->email=$request->email;
        $location->phone=$request->phone;
        $location->save();

        return redirect()->route('Location.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Location::find($id)->delete();
        return redirect()->route('Location.index');
    }
}
