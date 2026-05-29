<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\Tour;

class DestinationController extends Controller
{
    public function destinationdetails($slug1,$slug2){
        // dd($slug2);
        $tour=Tour::where('slug',$slug2)->first();
        $regions=Region::where('status','Active')->get();
        return view('frontend.destination-details',compact('tour','regions'));
    }
    public function destinationlist($slug){
        // dd($slug);
        $region=Region::where('slug',$slug)->first();
        // dd($region);
        return view('frontend.destination-list',compact('region'));
    }
}
