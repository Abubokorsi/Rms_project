<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries=Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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
            'name' => 'required',
            'image' => 'required',
        ]);

        $image=$request->file('image');
        $slug=str_slug($request->name);
        if (isset($image)) 
        {
            $crrentDate=Carbon::now()->toDateString();
            $imagename=$slug.'-'.$crrentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/gallery')){
                mkdir('uploads/gallery', 077, true);

            }
            $image->move('uploads/gallery', $imagename);
            
        }
        else
        {
            $imagename='defult.png';
        }

        $gallery= new Gallery();
        $gallery->name =$request->name;
        $gallery->image =$imagename;
        $gallery->save();

        return redirect()->route('Gallery.index');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery=Gallery::find($id);
        if (file_exists('uploads/gallery'.$gallery->image)) {
           unlink('uploads/gallery'.$gallery->image);
        }
        $gallery->delete();

        return redirect()->route('Gallery.index');
    }
}
