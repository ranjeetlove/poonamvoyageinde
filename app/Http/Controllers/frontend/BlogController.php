<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Banner;

class BlogController extends Controller
{
    public function blog(Request $request){
        $banner= Banner::where('name','LIKE','%blog%')->first();
        $blogs = Blog::orderBy('id','desc')->paginate(6);

        if ($request->ajax()) {
            $html = view('frontend.partials.blog-cards', compact('blogs'))->render();
            return response()->json([
                'html' => $html,
                'hasMore' => $blogs->hasMorePages()
            ]);
        }

        return view('frontend.blog',compact('blogs','banner'));
    }
    public function blogdetails($slug){
        $banner= Banner::where('name','LIKE','%blog%')->first();
        $blog= Blog::where('slug',$slug)->first();
         if(!$blog){
            return redirect()->route('blog')->with('error', 'Blog post not found');
        }
        $blogs = Blog::orderBy('created_at', 'desc')->limit(6)->get();
        $pageTitle = $blog->title;
        $pageDescription = $blog->meta_description;
        $pageKeywords = $blog->meta_keywords;
        $schema = $blog->c_schema;
        return view('frontend.blog-details',compact('blog','blogs','banner','pageTitle','pageDescription','pageKeywords','schema'));
    }
}
