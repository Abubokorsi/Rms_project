<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialtys=Specialty::all();
        return view('admin.specialty.index', compact('specialtys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.specialty.create');
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
            'main_title' => 'required',
            'title' => 'required',
            'details' => 'required'
        ]);
        $specialty=new Specialty();
        $specialty->main_title=$request->main_title;
        $specialty->title=$request->title;
        $specialty->details=$request->details;
        $specialty->save();

        return redirect()->route('Specialty.index');
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
        $specialty=Specialty::find($id);
        return view('admin.specialty.edit', compact('specialty'));
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
            'main_title' => 'required',
            'title' => 'required',
            'details' => 'required'
        ]);
        $specialty=Specialty::find($id);
        $specialty->main_title=$request->main_title;
        $specialty->title=$request->title;
        $specialty->details=$request->details;
        $specialty->save();

        return redirect()->route('Specialty.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialty=Specialty::find($id);
        $specialty->delete();

        return redirect()->route('Specialty.index');
    }
}
