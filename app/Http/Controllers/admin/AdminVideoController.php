<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;


class AdminVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Video::orderBy('id','DESC')->paginate(10);
        return view('admin.video.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'video' => 'required',
            'status' => 'required',
        ]);
        //dd($request->all());
        $slug=str_replace(['/',' ','\\',','],'-',strtolower($request->video));
		$slug=preg_replace('/-+/', '-', $slug);
        $video = new Video;
        $video->name= $request->name;
        $video->slug= $slug;
        $video->video= $request->video;
        $video->status= $request->status;
        $checkSlug = $video->whereSlug($slug)->exists();
        // dd($video);
        if(!$checkSlug){
            $video->save();
            return back()->with('success','upload successful');

        }else{
            return back()->withInput()->with('error','Already Video Exists');
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
        $id = request('id');
        $data = Video::find($id);
        return view('admin.video.edit',compact('data'));
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
        $validate = $request->validate([
        ]);
        $id=$request->id;
        $video = Video::find($id);
        $video->name= $request->name;
        $video->video= $request->video;
        $video->status= $request->status;
        // dd($video);
        $video->save();
        return redirect()->route('video')->with('status','Video Updated Successfully');
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
        $video = Video::find($id);
        // dd($id);
        $video->delete();
        return back()->with('flash_success', 'Video Deleted  Successfully!');
    }
}
