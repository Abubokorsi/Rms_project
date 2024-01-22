<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonials;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonials::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
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
            'postion' => 'required',
            'image' => 'required',
            'details' => 'required'
        ]);

        $image=$request->file('image');
        $slug=str_slug($request->name);
        if(isset($image)){
            $crrentDate=Carbon::now()->toDateString();
            $imagename=$slug.'-'.$crrentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/testimonial')){
                mkdir('uploads/testimonial', 077, true);
            }
            $image->move('uploads/testimonial/',$imagename);

        }
        else{
            $imagename='defult.png';
        }
        $testimonial=new Testimonials();
        $testimonial->image=$imagename;
        $testimonial->name=$request->name;
        $testimonial->positon=$request->postion;
        $testimonial->details=$request->details;
        $testimonial->save();

        return redirect()->route('Testimonials.index');
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
        $testimonial=Testimonials::find($id);
        return view('admin.testimonials.edit', compact('testimonial'));
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
            'details' => 'required'
        ]);

        $testimonial=Testimonials::find($id);

        $image=$request->file('image');
        $slug=str_slug($request->name);
        if(isset($image)){
            $crrentDate=Carbon::now()->toDateString();
            $imagename=$slug.'-'.$crrentDate.'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/testimonial')){
                mkdir('uploads/testimonial', 077, true);
            }
            $image->move('uploads/testimonial/',$imagename);

        }
        else{
            $imagename='defult.png';
        }
        
        $testimonial->image=$imagename;
        $testimonial->name=$request->name;
        $testimonial->positon=$request->postion;
        $testimonial->details=$request->details;
        $testimonial->save();

        return redirect()->route('Testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial=Testimonials::find($id);
        if(file_exists('uploads/testimonial'. $testimonial->image)){
            unlink('uploads/testimonial'. $testimonial->image);
        }
        $testimonial->delete();

        return redirect()->route('Testimonials.index');
    }
}
