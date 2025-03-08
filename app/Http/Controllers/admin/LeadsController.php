<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class LeadsController extends Controller
{
    public function index()
    {
        $data = Contact::orderBy('id','DESC')->paginate(10);
        return view('admin.leads.index',compact('data'));
    }

    // public function delete(Request $request)
    // {
    //     $id=$request->id;
    //     $contact = ContactUs::find($id);
    //     $contact->delete();
    //     return back()->with('flash_success', 'contact Deleted  Successfully!');

    // }

    // public function contactDetails($id)
    // {
    //     $data = ContactUs::where('id',$id)->first();
    //     return view('admin.contact.contact-details',compact('data'));
    // }
}    