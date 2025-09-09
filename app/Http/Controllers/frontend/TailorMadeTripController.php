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
        $metaTitle = "Voyage sur mesure en Inde | Rajasthan, Inde du Nord & Sud";
        $pageDescription = "Voyage sur mesure en Inde avec Poonam Voyage Inde : circuits personnalisés au Rajasthan, en Inde du Nord et en Inde du Sud.";
        $pageKeywords = "voyage sur mesure en Inde,  Voyage en Inde,  voyage sur mesure au Rajasthan,  voyage sur mesure en Inde du Nord,  voyage sur mesure en Inde du Sud";
        return view('frontend.tailor-made-trip',compact('regions','banner','metaTitle','pageDescription','pageKeywords'));
    }
}
