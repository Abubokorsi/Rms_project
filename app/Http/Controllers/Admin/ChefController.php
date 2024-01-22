<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs=Chef::all();
        return view('admin.chef.index', compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.chef.create');
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
            'image' => 'required',
            'name' => 'required',
            'postion' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
        ]);

        $image=$request->file('image');
        $slug=str_slug($request->name);

        if (isset($image)) {
            $crrentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$crrentDate.'.'.$image->getClientOriginalExtension();

            if(!file_exists('uploads/chef')){
                mkdir('uploads/chef', 077, true);
            }
            $image->move('uploads/chef',$imagename);
        }
        else{
            $imagename='defult.png';
        }
        $chef=new Chef();
        $chef->image=$imagename;
        $chef->name=$request->name;
        $chef->postion=$request->postion;
        $chef->twitter=$request->twitter;
        $chef->facebook=$request->facebook;
        $chef->instagram=$request->instagram;
        $chef->linkedin=$request->linkedin;
        $chef->image=$imagename;
        $chef->save();

        return redirect()->route('Chef.index');
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
        $chef=Chef::find($id);
        return view('admin.chef.edit', compact('chef'));
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
            'name' => 'required',
            'postion' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
        ]);

        $image=$request->file('image');
        $slug=str_slug($request->name);
        if (isset($image)) {
            $crrentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$crrentDate.'.'.$image->getClientOriginalExtension();

            if(!file_exists('uploads/chef')){
                mkdir('uploads/chef', 077, true);
            }
            $image->move('uploads/chef',$imagename);
        }
        else{
            $imagename='defult.png';
        }
        $chef=Chef::find($id);
        $chef->image=$imagename;
        $chef->name=$request->name;
        $chef->postion=$request->postion;
        $chef->twitter=$request->twitter;
        $chef->facebook=$request->facebook;
        $chef->instagram=$request->instagram;
        $chef->linkedin=$request->linkedin;
        
        $chef->save();

        return redirect()->route('Chef.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chef=Chef::find($id);
        if(file_exists('uploads/chef/'.$chef->image)){
            unlink('uploads/chef/'.$chef->image);
        }
        $chef->delete();
        return redirect()->route('Chef.index');
    }
}
