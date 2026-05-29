<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Banner::orderBy('id','DESC')->paginate(10);
        return view('admin.banners.index',compact('data'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        //dd($request->all());
        $slug=str_replace(['/',' ','\\',','],'-',strtolower($request->name));
		$slug=preg_replace('/-+/', '-', $slug);
        $banners = new Banner;
        $banners->name= $request->name;
        $banners->slug= $slug;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'uploads/banners/' . $filename;
            $file->move(public_path('uploads/banners'),$filePath);
            //dd($filename);
            $banners->image = $filename;
        }
        // $banners->image= $request->image;
        $banners->status= $request->status;
        $checkSlug = $banners->whereSlug($slug)->exists();
        // dd($banners);
        if(!$checkSlug){
            $banners->save();
            return back()->with('success','upload successful');

        }else{
            return back()->withInput()->with('error','Already Banner Name Exists');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        // $banner= banner::
        $id = request('id');
        $data = Banner::find($id);
        return view('admin.banners.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
        ]);
        $id=$request->id;
        $banners = Banner::find($id);
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'uploads/banners/' . $filename;
            $file->move(public_path('uploads/banners'),$filePath);
            //dd($filename);
            $banners->image = $filename;
        }
        $banners->status= $request->status;
        // dd($banners);
        $banners->save();
        return redirect()->route('banners')->with('status','Banner Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $id=$request->id;
        $banners = Banner::find($id);
        // dd($id);
        @unlink('public/uploads/banners/'.$banners->image);
        $banners->delete();
        return back()->with('flash_success', 'Banner Deleted  Successfully!');
    }
}
