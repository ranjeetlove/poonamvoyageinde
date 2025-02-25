<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = About::orderBy('id','DESC')->paginate(10);
        return view('admin.about.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
         $validate = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required',
            'about_owner' => 'required',
            'about_head' => 'required',
            'about_content' => 'required',
            'status' => 'required',
        ]);
        //dd($request->all());
        // $slug=str_replace(['/',' ','\\',','],'-',strtolower($request->name));
		// $slug=preg_replace('/-+/', '-', $slug);
        $about = new About;
        $about->name= $request->name;
        $about->designation= $request->designation;
        $about->about_owner= $request->about_owner;
        $about->about_head= $request->about_head;
        $about->about_content= $request->about_content;
        $about->status= $request->status;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'uploads/abouts/' . $filename;
            $file->move(public_path('uploads/abouts'),$filePath);
            //dd($filename);
            $about->image = $filename;
        }
        // dd($about);
        $about->save();
          return redirect()->route('about')->with('success','upload successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // dd($request);
        $id = $request->id;
        // dd($id);
        $data = About::find($id);
        return view('admin.about.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //  dd($request->all());
         $validate = $request->validate([
        ]);
        $id=$request->id;
        $about = About::find($id);
        $about->name= $request->name;
        $about->designation= $request->designation;
        $about->about_owner= $request->about_owner;
        $about->about_head= $request->about_head;
        $about->about_content= $request->about_content;
        $about->status= $request->status;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'uploads/abouts/' . $filename;
            $file->move(public_path('uploads/abouts'),$filePath);
            //dd($filename);
            $about->image = $filename;
        }
        // dd($about);
        $about->save();
        return redirect()->route('about')->with('status','about Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->id;
        $about = About::find($id);
        // dd($id);
        @unlink('public/uploads/abouts/'.$about->image);
        $about->delete();
        return back()->with('flash_success', 'about Deleted  Successfully!');

    }
}
