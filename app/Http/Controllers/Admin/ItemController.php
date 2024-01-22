<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        return view('admin.item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.item.create', compact('categories'));
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
            'details' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $image=$request->file('image');
        $slug=str_slug($request->name);

        if (isset($image)) {
            $crrentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$crrentDate.'.'.$image->getClientOriginalExtension();

            if(!file_exists('uploads/item')){
                mkdir('uploads/item', 077, true);
            }
            $image->move('uploads/item',$imagename);
        }
        else{
            $imagename='defult.png';
        }
        $item=new Item();
        $item->category_id=$request->category;
        $item->name=$request->name;
        $item->details=$request->details;
        $item->price=$request->price;
        $item->image=$imagename;
        $item->save();

        return redirect()->route('Item.index');
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
        $item=Item::find($id);
        return view('admin.item.edit');
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
            'details' => 'required',
            'price' => 'required',
        ]);
        $item=Item::find($id);
        $image=$request->file('image');
        $slug=str_slug($request->name);

        if (isset($image)) {
            $crrentDate =Carbon::now()->toDateString();
            $imagename =$slug.'-'.$crrentDate.'.'.$image->getClientOriginalExtension();

            if(!file_exists('uploads/item')){
                mkdir('uploads/item', 077, true);
            }
            $image->move('uploads/item',$imagename);
        }
        else{
            $imagename=$item->image;
        }
        $item->category_id=$request->category;
        $item->name=$request->name;
        $item->details=$request->details;
        $item->price=$request->price;
        $item->image=$imagename;
        $item->save();

        return redirect()->route('Item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $item=Item::find($id);
       if(file_exists('uploads/item/'.$item->image)){
        unlink('uploads/item/'.$item->image);
       }
       $item->delete();
       return redirect()->route('Item.index');
    }
}
