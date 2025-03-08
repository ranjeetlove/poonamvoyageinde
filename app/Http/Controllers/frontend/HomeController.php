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
use App\Models\Rating;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function newLandingPage(){
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
    public function index() {
        $banner= [];
        $blogs = Blog::where('status','Active')->limit(4)->get();
        $test = Testimonial::latest()->take(3)->get();
        $regions = Region::orderBy('region')->get();
        $regions = $regions->reverse();
        $tours = Tour::orderBy('id','desc')->get();
        $videos = Video::orderBy('id','desc')->get();
        $about= About::orderBy('id','desc')->first();
        // echo '<pre>';
        // print_r($regions->toArray());
        // echo '</pre>';
        // die;
        return view('frontend.newLandingPage',compact('blogs','test','banner','about','regions','tours','videos'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'region' => 'required|string|max:255',
            'interest' => 'required|string|max:255',
            'accommodation' => 'required|string|max:255',
            'budget' => 'required|string|max:255',
            'children' => 'required|integer',
            'departure_date' => 'required|date',
            'return_date' => 'required|date',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

         Contact::create($validatedData);
         $emailData = [
            'region' => $request->region,
            'interest' => $request->interest,
            'accommodation' => $request->accommodation,
            'budget' => $request->budget,
            'children' => $request->children,
            'departure_date' => $request->departure_date,
            'return_date' => $request->return_date,
            'email' => $request->email,
            'phone' => $request->phone
        ];
        Mail::send('frontend.enquery1', $emailData, function ($message) {
            $message->subject('Enquiry Mail');
            $message->to('info@poonamvoyageinde.com');
        });
        if (strpos($validatedData['email'], '@gmail.com') !== false) {
            Mail::send('frontend.enquery1', $emailData, function ($message) use ($validatedData) {
                $message->subject('Enquiry Mail');
                $message->to('poonamvoyageinde@gmail.com');
            });
        }

        return redirect()->route('thankyou')->with('success', 'Your request has been submitted successfully!');
    }

}
