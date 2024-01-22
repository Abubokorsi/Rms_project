<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Chef;
use App\Models\Complian;
use App\Models\Gallery;
use App\Models\Item;
use App\Models\Location;
use App\Models\Slider;
use App\Models\Special_item;
use App\Models\SpecialCategory;
use App\Models\Specialty;
use App\Models\Testimonials;
use App\Models\Topcontent;
use App\Models\Welcome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        $topcontent = Topcontent::first();
        $banner=Banner::first();
        $welcome=Welcome::first();
        $specialtys=Specialty::all();
        $categories=Category::all();
        $items=Item::all();
        $sliders=Slider::all();
        $testimonials=Testimonials::all();
        $galleries=Gallery::all();
        $special_categories=SpecialCategory::all();
        $special_items=Special_item::all();
        $chefs=Chef::all();
        $location=Location::first();

       return view('home', compact('banner','topcontent', 'welcome', 'specialtys', 'categories', 'items', 'sliders', 'testimonials', 'galleries', 'special_categories', 'special_items', 'chefs', 'location'));
       // return $banner;
    }
    public function bookings(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'person' => 'required',
            'message' => 'required',
        ]);

        $booking=new Booking();
        $booking->name=$request->name;
        $booking->email=$request->email;
        $booking->phone=$request->phone;
        $booking->date=$request->date;
        $booking->time=$request->time;
        $booking->person=$request->person;
        $booking->message=$request->message;
        $booking->status=false;
        $booking->save();

        return redirect()->back();
    }
    public function complians(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $complian=new Complian();
        $complian->name=$request->name;
        $complian->email=$request->email;
        $complian->subject=$request->subject;
        $complian->message=$request->message;
        $complian->save();

        return redirect()->back(); 
    }
}