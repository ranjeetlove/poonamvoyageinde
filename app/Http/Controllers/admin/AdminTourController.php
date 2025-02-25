<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Region;
use App\Models\Daychart;

class AdminTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tour::orderBy('id','DESC')->paginate(10);
        return view('admin.tour.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions= Region::orderBy('region')->get();
        return view('admin.tour.create',compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   dd($request->all());
          $validate = $request->validate([
            'region_id' => 'required',
            'status' => 'required',
        ]);
        // dd($request->all());
            $slug=str_replace(['/',' ','\\',','],'-',strtolower($request->title));
            $slug=preg_replace('/-+/', '-', $slug);
            $existing_tour=Tour::where('slug',$slug)->first();
            if(!$existing_tour){
                try{
                    $tour = new Tour;
                    $tour->region_id= $request->region_id;
                    $tour->title= $request->title;
                    $tour->slug= $slug;
                    if($request->hasfile('banner'))
                    {
                        $file = $request->file('banner');
                        $filename = $file->getClientOriginalName();
                        $filePath = 'uploads/tour/banner/' . $filename;
                        $file->move(public_path('uploads/tour/banner'),$filePath);
                        //dd($filename);
                        $tour->banner = $filename;
                    }
                    if($request->hasfile('image'))
                    {
                        $file = $request->file('image');
                        $filename = $file->getClientOriginalName();
                        $filePath = 'uploads/tour/image/' . $filename;
                        $file->move(public_path('uploads/tour/image'),$filePath);
                        //dd($filename);
                        $tour->image = $filename;
                    }
                    $tour->price= $request->price;
                    $tour->day= $request->day;
                    $tour->night= $request->night;
                    $tour->content= $request->content;
                    $tour->status= $request->status;
        // dd($tour);
                    $tour->save();
                    foreach($request->day_head as $key=>$day_head)
                    {
                        // dd($day_head);
                        $day_array[$key]['tour_id']=$tour->id;
                        $day_array[$key]['day_head'] = $day_head;
                        $day_array[$key]['day_content'] = $request->day_content[$key];
                        $day_array[$key]['status']=$tour->status;

                    }
                    if(count($day_array)>0){
                        // dd($day_array);
                     $day= Daychart::insert($day_array);

                    }

                    }
                    catch(Exception $e){
                        dd($e);
                    }



            return back()->with('success','upload successful');

        }else{
            return back()->withInput()->with('error','Already tour Name Exists');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

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
      $data = Tour::find($id);
      return view('admin.tour.edit',compact('data'));
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
         // dd($request->all());
       $validate = $request->validate([
    ]);
    $id=$request->id;
    $tour = Tour::find($id);
    $tour->title= $request->title;
    if($request->hasfile('banner'))
    {
        $file = $request->file('banner');
        $filename = $file->getClientOriginalName();
        $filePath = 'uploads/tour/banner/' . $filename;
        $file->move(public_path('uploads/tour/banner'),$filePath);
        //dd($filename);
        $tour->banner = $filename;
    }
    if($request->hasfile('image'))
    {
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $filePath = 'uploads/tour/image/' . $filename;
        $file->move(public_path('uploads/tour/image'),$filePath);
        //dd($filename);
        $tour->image = $filename;
    }
    $tour->price= $request->price;
    $tour->day= $request->day;
    $tour->night= $request->night;
    $tour->content= $request->content;
    $tour->status= $request->status;
// dd($tour);
    $tour->save();
    return redirect()->route('tour')->with('status','Banner Updated Successfully');
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
        $tour = Tour::find($id);
        // dd($id);
        @unlink('public/uploads/tour/'.$tour->banner);
        $tour->delete();
        return back()->with('flash_success', 'Banner Deleted  Successfully!');
    }
}
