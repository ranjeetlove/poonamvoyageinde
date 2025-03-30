<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class AdminTestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Testimonial::orderBy('id','DESC')->paginate(10);
        return view('admin.testimonial.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('hi');
        return view('admin.testimonial.create');
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

            'status' => 'required',
        ]);
        // dd($request->all());
        $slug=str_replace(['/',' ','\\',','],'-',strtolower($request->comment_head));
        $slug=preg_replace('/-+/', '-', $slug);
        $existing_name=Testimonial::where('slug',$slug)->first();
        if(!$existing_name){
            try{
                $testimonial = new Testimonial;
                $testimonial->name= $request->name;
                $testimonial->slug= $slug;
                $testimonial->country= $request->country;
                $testimonial->designation= $request->designation;
                $testimonial->comment_head= $request->comment_head;
                $testimonial->meta_description= $request->meta_description;
                $testimonial->meta_keywords= $request->meta_keywords;
                $testimonial->comment_content= $request->comment_content;
                $testimonial->rating= $request->rating;
                $testimonial->status= $request->status;
                if($request->hasfile('image'))
                    {
                        $file = $request->file('image');
                        $filename = $file->getClientOriginalName();
                        $filePath = 'uploads/testimonials/' . $filename;
                        $file->move(public_path('uploads/testimonials'),$filePath);
                        //dd($filename);
                        $testimonial->image = $filename;
                    }
            $testimonial->save();}
            catch(Exception $e){
                dd($e);
            }
            return back()->with('success','upload successful');
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
        $data = Testimonial::find($id);
        return view('admin.testimonial.edit',compact('data'));
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
        //   dd($request->all());
         $validate = $request->validate([
        ]);
        $id=$request->id;
        $testimonial = Testimonial::find($id);
        $testimonial->name= $request->name;
        $testimonial->country= $request->country;
        $testimonial->designation= $request->designation;
        $testimonial->meta_description= $request->meta_description;
        $testimonial->meta_keywords= $request->meta_keywords;
        $testimonial->comment_head= $request->comment_head;
        $testimonial->comment_content= $request->comment_content;
        $testimonial->rating= $request->rating;
        $testimonial->status= $request->status;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'uploads/testimonials/' . $filename;
            $file->move(public_path('uploads/testimonials'),$filePath);
            //dd($filename);
            $testimonial->image = $filename;
        }
        // dd($testimonial);
        $testimonial->save();
        return redirect()->route('testimonial')->with('status','testimonial Updated Successfully');
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
        $testimonial = Testimonial::find($id);
        // dd($id);
        // @unlink('public/uploads/testimonial/'.$testimonial->image);
        $testimonial->delete();
        return back()->with('flash_success', 'Testimonial Deleted  Successfully!');
    }
}
