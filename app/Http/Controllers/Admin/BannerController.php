<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner=Banner::all();
        return view('admin.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
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
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required',
        ]);

        $image=$request->file('image');
        $slug=str_slug($request->title);
        if (isset($image)) 
        {
            $crrentDate=Carbon::now()->toDateString();
            $imagename=$slug.'-'.$crrentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/banner')){
                mkdir('uploads/banner', 077, true);

            }
            $image->move('uploads/banner', $imagename);
            
        }
        else
        {
            $imagename='defult.png';
        }

        $banner= new Banner();
        $banner->title =$request->title;
        $banner->sub_title =$request->sub_title;
        $banner->video =$request->video;
        $banner->image =$imagename;
        $banner->save();
        return redirect()->route('Banner.index');
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
        $banner=Banner::find($id);
        return view('admin.banner.edit', compact('banner'));
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
            'title' => 'required',
            'sub_title' => 'required'
        ]);

        $image=$request->file('image');
        $slug=str_slug($request->title);
        $banner=Banner::find($id);
        if (isset($image)) 
        {
            $crrentDate=Carbon::now()->toDateString();
            $imagename=$slug.'-'.$crrentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/banner')){
                mkdir('uploads/banner', 077, true);

            }
            $image->move('uploads/banner', $imagename);
            
        }
        else
        {
            $imagename=$banner->image;
        }
        $banner->title =$request->title;
        $banner->sub_title =$request->sub_title;
        $banner->video =$request->video;
        $banner->image =$imagename;
        $banner->save();
        return redirect()->route('Banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner=Banner::find($id);
        if (file_exists('uploads/banner'.$banner->image)) {
            unlink('uploads/banner'.$banner->image);
        }
        $banner->delete();
        return redirect()->route('Banner.index');
    }
}
