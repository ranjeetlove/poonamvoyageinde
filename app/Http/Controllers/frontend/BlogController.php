<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Banner;

class BlogController extends Controller
{
    public function blog(){
        $banner= Banner::where('name','LIKE','%blog%')->first();
        $blogs = Blog::orderBy('id','desc')->get();
		
        return view('frontend.blog',compact('blogs','banner'));
    }
    public function blogdetails($slug){
        $banner= Banner::where('name','LIKE','%blog%')->first();
        $blog= Blog::where('slug',$slug)->first();
        $blogs= Blog::get();
        return view('frontend.blog-details',compact('blog','blogs','banner'));
    }
}
