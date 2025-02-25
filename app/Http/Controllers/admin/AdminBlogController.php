<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::orderBy('id','DESC')->paginate(10);
        return view('admin.blog.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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
            'posted_by' => 'required',
            'posted_date' => 'required',
            'category' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        //dd($request->all());
        $slug=str_replace(['/',' ','\\',','],'-',strtolower($request->title));
        $slug=preg_replace('/-+/', '-', $slug);
        $existing_name=Blog::where('slug',$slug)->first();
        if(!$existing_name){
        $blog = new Blog;
        $blog->posted_by= $request->posted_by;
        $blog->posted_date= $request->posted_date;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'uploads/blog/' . $filename;
            $file->move(public_path('uploads/blog'),$filePath);
            //dd($filename);
            $blog->image = $filename;
        }

        $blog->category= $request->category;
        $blog->title= $request->title;
        $blog->slug= $slug;
        $blog->content= $request->content;
        $blog->status= $request->status;
        // dd($blog);
        $blog->save();
        return redirect()->route('admin-blog')->with('success','upload successful');
    }else{
        return back()->withInput()->with('error','Already Name Exists');
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
        $data = Blog::find($id);
        return view('admin.blog.edit',compact('data'));
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
        $blog = Blog::find($id);
 		$slug=str_replace(['/',' ','\\',','],'-',strtolower($request->title));
        $slug=preg_replace('/-+/', '-', $slug);
        $blog->posted_by= $request->posted_by;
        $blog->posted_date= $request->posted_date;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'uploads/blog/' . $filename;
            $file->move(public_path('uploads/blog'),$filePath);
            //dd($filename);
            $blog->image = $filename;
        }

        $blog->category= $request->category;
		$blog->slug= $slug;
        $blog->title= $request->title;
        $blog->content= $request->content;
        $blog->status= $request->status;

        $blog->save();
        return redirect()->route('admin-blog')->with('status','blog Updated Successfully');

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
        $blog = Blog::find($id);
        // dd($id);
        @unlink('public/uploads/blog/'.$blog->image);
        $blog->delete();
        return back()->with('flash_success', 'blog Deleted  Successfully!');

    }
}
