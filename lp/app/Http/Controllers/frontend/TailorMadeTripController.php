<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Banner;

class TailorMadeTripController extends Controller
{
    public function tailormadetrip(){
		$regions=Region::where('status','Active')->get();
				        $banner= Banner::where('name','LIKE','%tailor%')->first();

        return view('frontend.tailor-made-trip',compact('regions','banner'));
    }
}
