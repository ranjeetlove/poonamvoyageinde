<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Banner;

class CommentsController extends Controller
{
    public function comments(){
        $banner= Banner::where('name','LIKE','%comments%')->first();
        $testimonials = Testimonial::where('status', 'Active')
                            ->orderBy('created_at', 'desc')
                            ->get();
        $metaTitle = "Avis clients Poonam Voyage Inde | Témoignages de voyages sur mesure";
        $pageDescription = "Retrouvez les avis et témoignages de voyageurs satisfaits avec Poonam Voyage Inde, spécialiste des circuits personnalisés en Inde.";
        $pageKeywords = "Poonam Voyage Inde, avis clients Inde, commentaires voyageurs Inde, témoignages Inde, agence de voyage Inde, voyage sur mesure Inde, avis agence voyage Inde, retours clients Rajasthan, avis circuits Inde du Nord, avis circuits Inde du Sud";                    
        return view('frontend.comments',compact('banner','testimonials','metaTitle','pageDescription','pageKeywords'));
    }
    public function commentsdetails($slug){
        $banner= Banner::where('name','LIKE','%comments%')->first();
        $testimonials= Testimonial::where('slug',$slug)->first();
        $pageTitle = $testimonials->comment_head;
        $pageDescription = $testimonials->meta_description;
        $pageKeywords = $testimonials->meta_keywords;
        // dd($testimonials);
        return view('frontend.comments-details',compact('testimonials','banner','pageTitle','pageDescription','pageKeywords'));
    }
}
