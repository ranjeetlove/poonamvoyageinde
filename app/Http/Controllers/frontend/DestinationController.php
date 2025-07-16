<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\Tour;
use App\Models\Hotal;
use App\Models\Daychart;

class DestinationController extends Controller
{
    public function destinationdetails($slug1,$slug2){
        $tour = Tour::where('slug', $slug2)->first();
        if (!$tour) {
            return response()->json(['error' => 'Tour not found'], 404);
        }
        $hotelIds = explode(',', $tour->hotals); 
        $hotels = Hotal::with('city')
        ->whereIn('id', $hotelIds)
        ->get()
        ->map(function ($hotel) {
            return [
                'id' => $hotel->id,
                'name' => $hotel->name,
                'image' => $hotel->image,
                'city_id' => $hotel->city_id,
                'city' => $hotel->city->name ?? 'Unknown',
                'status' => $hotel->status,
            ];
        });
        $dayCharts = Daychart::where('tour_id', $tour->id)->get();
        $pageTitle = $tour->meta_title;
        $pageDescription = $tour->meta_description;
        $pageKeywords = $tour->meta_keywords;
        // $relatedDestination = Tour::where('region_id',$tour->region_id)->with('region:id,slug')->orderBy('created_at', 'desc')->limit(6)->get();
        // echo '<pre>';
        // print_r($tour->toArray());
        //  print_r($hotels->toArray());
        //   print_r($dayCharts->toArray());
        // echo '</pre>';
        // die;
        return view('frontend.destination-details', compact('tour', 'hotels', 'dayCharts', 'pageTitle', 'pageDescription', 'pageKeywords'));
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
