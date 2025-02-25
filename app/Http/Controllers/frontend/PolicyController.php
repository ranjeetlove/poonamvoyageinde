<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class PolicyController extends Controller
{
    public function privacyPolicy(){
        $banner= Banner::where('name','LIKE','%privacy%')->first();
        return view('frontend.privacy-policy',compact('banner'));
    }
    public function termsandconditions(){
        $banner= Banner::where('name','LIKE','%terms%')->first();
        return view('frontend.terms-and-conditions',compact('banner'));
    }
}
