<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topcontent;
use Illuminate\Http\Request;

class TopContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topcontents=Topcontent::all();
        return view('admin.topcontent.index', compact('topcontents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.topcontent.create');
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
            'phone' => 'required',
            'open_day' => 'required',
            'open_hour' => 'required',
            'language' => 'required',
        ]);
        $topcontent= new Topcontent();
        $topcontent->phone=$request->phone;
        $topcontent->open_day=$request->open_day;
        $topcontent->open_hour=$request->open_hour;
        $topcontent->language=$request->language;
        $topcontent->save();

        return redirect()->route('Topcontent.index');
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
        $topcontent=Topcontent::find($id);
        return view('admin.topcontent.edit', compact('topcontent'));
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
            'phone' => 'required',
            'open_day' => 'required',
            'open_hour' => 'required',
            'language' => 'required',
        ]);
        $topcontent=Topcontent::find($id);
        $topcontent->phone=$request->phone;
        $topcontent->open_day=$request->open_day;
        $topcontent->open_hour=$request->open_hour;
        $topcontent->language=$request->language;
        $topcontent->save();

        return redirect()->route('Topcontent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Topcontent::find($id)->delete();
        return redirect()->route('Topcontent.index');
    }
}
