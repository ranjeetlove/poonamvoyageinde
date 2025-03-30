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
        return view('frontend.comments',compact('banner','testimonials'));
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
