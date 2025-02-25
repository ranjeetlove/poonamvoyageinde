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
        $pageTitle = "Voyage de Luxe en Inde | Séjour Inde Pas Cher avec Poonam Voyage";
        $pageDescription = "Explorez l'Inde avec style grâce à nos voyages de luxe ou découvrez des séjours économiques adaptés à votre budget. Poonam Voyage vous propose des expériences personnalisées et authentiques.";
        $pageKeywords = "Voyage de luxe en Inde, Séjour Inde pas cher";
        return view('frontend.tailor-made-trip',compact('regions','banner','pageTitle','pageDescription','pageKeywords'));
    }
}
