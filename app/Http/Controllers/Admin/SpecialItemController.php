<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Special_item;
use App\Models\SpecialCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SpecialItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $special_items=Special_item::with('special_category')->get();
        return view('admin.special_item.index', compact('special_items'));
        // return $special_items;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $special_categories =SpecialCategory::all();
        return view('admin.special_item.create', compact('special_categories'));
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
            'details' => 'required',
            'image' => 'required',
        ]);

        $image=$request->file('image');
        $slug=str_slug($request->title);

        if (isset($image)) {
            $crrentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$crrentDate.'.'.$image->getClientOriginalExtension();

            if(!file_exists('uploads/special_item')){
                mkdir('uploads/special_item', 077, true);
            }
            $image->move('uploads/special_item',$imagename);
        }
        else{
            $imagename='defult.png';
        }
        $special_item=new Special_item();
        $special_item->special_category_id=$request->category;
        $special_item->title=$request->title;
        $special_item->details=$request->details;
        $special_item->sub_title=$request->sub_title;
        $special_item->image=$imagename;
        $special_item->save();

        return redirect()->route('Special_item.index');
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
        $special_item=Special_item::find($id);
        return view('admin.special_item.edit', compact('special_item'));
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
            'sub_title' => 'required',
            'details' => 'required',
        ]);

        $image=$request->file('image');
        $slug=str_slug($request->title);

        if (isset($image)) {
            $crrentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$crrentDate.'.'.$image->getClientOriginalExtension();

            if(!file_exists('uploads/special_item')){
                mkdir('uploads/special_item', 077, true);
            }
            $image->move('uploads/special_item',$imagename);
        }
        else{
            $imagename='defult.png';
        }
        $special_item=new Special_item();
        $special_item->special_category_id=$request->category;
        $special_item->title=$request->title;
        $special_item->details=$request->details;
        $special_item->sub_title=$request->sub_title;
        $special_item->image=$imagename;
        $special_item->save();

        return redirect()->route('Special_item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $special_item =Special_item::find($id);
        if (file_exists('uploads/special_item/'.$special_item->image)) {
            unlink('uploads/special_item/'.$special_item->image);
        }
        $special_item->delete();
        return redirect()->route('Special_item.index');
    }
}
