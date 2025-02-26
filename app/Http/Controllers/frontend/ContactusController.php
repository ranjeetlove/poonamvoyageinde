<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Models\Banner;


class ContactusController extends Controller
{
    public function contactus(){

		        $banner= Banner::where('name','LIKE','%contact%')->first();

        return view('frontend.contactus',compact('banner'));
    }
    public function mail(Request $request)
    {
     // dd($request->all());
        Mail::send('frontend.enquery',  ['name' => $request->Name,'email' => $request->email,'mobile' => $request->mobile,'whatsapp' => $request->whatsapp,
        'subject' =>$request->subject,'messagess'=>$request->message],function($message) use($request)
            {

                $message->from($request->email);
                $message->subject('Enquiry mail');
                $message->to('info@poonamvoyageinde.com');
            });
            // dd(back()->with('success','upload successful.'));
            return back()->with('success','upload successful.');
    }
	public function mail1(Request $request)
    {
        //dd($request->all());
        Mail::send('frontend.enquery1',  ['region' => $request->region,'interest' => $request->interest,
        'accommodation' =>$request->accommodation,'budget'=>$request->budget,'children'=>$request->children,
        'departure_date'=>$request->departure_date,'return_date'=>$request->return_date,'email'=>$request->email,
        'phone'=>$request->phone],function($message) use($request)
            {

                //$message->from($request->email);
                $message->subject('Enquiry mail');
                $message->to('info@poonamvoyageinde.com');
            });
            return back()->with('success','upload successful.');
    }
}
