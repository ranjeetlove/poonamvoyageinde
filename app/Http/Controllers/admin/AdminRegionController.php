<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;

class AdminRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Region::orderBy('id','DESC')->paginate(10);
        return view('admin.region.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.region.create');
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
            'region' => 'required',
            'status' => 'required',
        ]);
        //dd($request->all());
        $slug=str_replace(['/',' ','\\',','],'-',strtolower($request->region));
		$slug=preg_replace('/-+/', '-', $slug);
        $region = new Region;
        $region->region= $request->region;
        $region->slug= $slug;
        if($request->hasfile('banner'))
        {
            $file = $request->file('banner');
            $filename = $file->getClientOriginalName();
            $filePath = 'uploads/regions/' . $filename;
            $file->move(public_path('uploads/regions'),$filePath);
            //dd($filename);
            $region->banner = $filename;
        }
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'uploads/regions/' . $filename;
            $file->move(public_path('uploads/regions'),$filePath);
            //dd($filename);
            $region->image = $filename;
        }
        $region->heading= $request->heading;
        $region->title= $request->title;
        $region->meta_title= $request->meta_title;
        $region->meta_description= $request->meta_description;
        $region->meta_keywords= $request->meta_keywords;
        $region->content= $request->content;
        $region->rating= $request->rating;
        $region->status= $request->status;
        $checkSlug = $region->whereSlug($slug)->exists();
        // dd($region);
        if(!$checkSlug){
            $region->save();
            return redirect()->route('region')->with('success','upload successful');
        }else{
            return back()->withInput()->with('error','Already Region Name Exists');
        }
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
    public function edit()
    {
        // $banner= banner::
        $id = request('id');
        $data = Region::find($id);
        return view('admin.region.edit',compact('data'));
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
    //    dd($request->all());
       $validate = $request->validate([
    ]);
    $id=$request->id;
    $region = Region::find($id);
    if($request->hasfile('banner'))
    {
        $file = $request->file('banner');
        $filename = $file->getClientOriginalName();
        $filePath = 'uploads/regions/' . $filename;
        $file->move(public_path('uploads/regions'),$filePath);
        //dd($filename);
        $region->banner = $filename;
    }
    if($request->hasfile('image'))
    {
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $filePath = 'uploads/regions/' . $filename;
        $file->move(public_path('uploads/regions'),$filePath);
        //dd($filename);
        $region->image = $filename;
    }
    $region->heading= $request->heading;
    $region->title= $request->title;
    $region->meta_title= $request->meta_title;
    $region->meta_description= $request->meta_description;
    $region->meta_keywords= $request->meta_keywords;
    $region->content= $request->content;
    $region->rating= $request->rating;
    $region->status= $request->status;
    // dd($region);
    $region->save();
    return redirect()->route('region')->with('status','Region Updated Successfully');
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
        $region = Region::find($id);
        // dd($id);
        @unlink('public/uploads/regions/'.$region->banner);
        @unlink('public/uploads/regions/'.$region->image);
        $region->delete();
        return back()->with('flash_success', 'Region Deleted  Successfully!');
    }
    }

