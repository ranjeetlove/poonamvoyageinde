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
        $region = Region::where('slug', $slug)->first();
        if (!$region) {
            return response()->json(['message' => 'Region not found'], 404);
        }
        $pageTitle = $region->meta_title;
        $pageDescription = $region->meta_description;
        $pageKeywords = $region->meta_keywords;
        return view('frontend.destination-list',compact('region','pageTitle','pageDescription','pageKeywords'));
    }
    
    public function allTour(){
        $tours = Tour::where('status', 'Active')->get();
        $pageTitle = '';
        $pageDescription = '';
        $pageKeywords = 'Guide touristique français en Inde, Les meilleures destinations en Inde, Voyage culturel Inde';
        return view('frontend.destination-list-all',compact('tours','pageTitle','pageDescription','pageKeywords'));
    }
}
