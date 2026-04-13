<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurTeams;
use App\Models\Banner;
use App\Models\About;

class OurTeamsController extends Controller
{
    public function ourTeams(){
        $teams = OurTeams::orderBy('id')->get();
        $banner= Banner::where('name','LIKE','%about%')->first();
        $about= About::orderBy('id','desc')->first();
        return view('frontend.our-teams',compact('teams','banner','about'));
    }
    // public function blogdetails($slug){
    //     $banner= Banner::where('name','LIKE','%blog%')->first();
    //     $blog= Blog::where('slug',$slug)->first();
    //     $blogs = Blog::orderBy('created_at', 'desc')->limit(6)->get();
    //     $pageTitle = $blog->title;
    //     $pageDescription = $blog->meta_description;
    //     $pageKeywords = $blog->meta_keywords;
    //     return view('frontend.blog-details',compact('blog','blogs','banner','pageTitle','pageDescription','pageKeywords'));
    // }
}
