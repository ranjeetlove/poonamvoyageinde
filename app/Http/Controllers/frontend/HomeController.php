<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\Banner;
use App\Models\About;
use App\Models\Region;
use App\Models\Tour;
use App\Models\Video;

class HomeController extends Controller
{
    public function index(){
        $banners= Banner::where('name','LIKE','%home%')->get();
        $blogs = Blog::where('status','Active')->paginate(3);
        $test = Testimonial::get();
        $regions = Region::orderBy('region')->get();
        $tours = Tour::orderBy('id','desc')->get();
        $videos = Video::orderBy('id','desc')->get();
        $about= About::orderBy('id','desc')->first();
        return view('frontend.index',compact('blogs','test','banners','about','regions','tours','videos'));
    }
    
     public function landingpage(){
        $banners= Banner::where('name','LIKE','%home%')->get();
        $blogs = Blog::where('status','Active')->paginate(3);
        $test = Testimonial::get();
        $regions = Region::orderBy('region')->get();
        $tours = Tour::orderBy('id','desc')->get();
        $videos = Video::orderBy('id','desc')->get();
        $about= About::orderBy('id','desc')->first();
        return view('frontend.landingpage',compact('blogs','test','banners','about','regions','tours','videos'));
    }
    public function aboutus(){
        $banner= Banner::where('name','LIKE','%about%')->first();
        $about= About::orderBy('id','desc')->first();
        return view('frontend.about-us',compact('banner','about'));
    }
    public function newLandingPage(){
        $banner= [];
        return view('frontend.newLandingPage',compact('banner'));
    }

}
