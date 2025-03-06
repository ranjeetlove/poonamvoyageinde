<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactController extends Controller
{
    public function index()
    {
        $data = ContactUs::orderBy('id','DESC')->paginate(10);
        return view('admin.contact.index',compact('data'));
    }

    public function delete(Request $request)
    {
        $id=$request->id;
        $contact = ContactUs::find($id);
        $contact->delete();
        return back()->with('flash_success', 'contact Deleted  Successfully!');

    }
}    