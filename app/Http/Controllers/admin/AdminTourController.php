<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Region;
use App\Models\Hotal;
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
        $hotals = \DB::table('hotals')
            ->join('cities', 'hotals.city_id', '=', 'cities.id')
            ->select(
                'hotals.id',
                'hotals.name',
                'hotals.image',
                'hotals.city_id',
                'hotals.created_at',
                'hotals.status',
                'cities.name as city'
            )
            ->orderBy('hotals.id')
            ->get();
        return view('admin.tour.create',compact('regions', 'hotals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
{
    try {
        $validate = $request->validate([
            'region_id'      => 'required',
            'title'          => 'required',
            'slug'           => 'required',
            'banner'         => 'required|image',
            'day'            => 'required|numeric',
            'night'          => 'required|numeric',
            'image'          => 'required|image',
            'description'    => 'required',
            'day_head'       => 'required|array',
            'dayWiseimage'   => 'required|array',
            'day_content'    => 'required|array',
            'status'         => 'required',
            'price'          => 'required|numeric',
            'hotals'         => 'required|array',
        ]);

        $slug = str_replace(['/',' ','\\',','],'-', strtolower($request->title));
        $slug = preg_replace('/-+/', '-', $slug);

        $existing_tour = Tour::where('slug', $slug)->first();
        if ($existing_tour) {
            return response()->json([
                'success' => false,
                'message' => 'Tour with this title already exists',
            ], 409);
        }

        $hotals = implode(',', $request->input('hotals'));

        $tour = new Tour;
        $tour->region_id       = $request->region_id;
        $tour->title           = $request->title;
        $tour->slug            = $slug;

        // Upload banner
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/tour/banner'), $filename);
            $tour->banner = $filename;
        }

        // Upload main image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/tour/image'), $filename);
            $tour->image = $filename;
        }

        $tour->price            = $request->price;
        $tour->day              = $request->day;
        $tour->night            = $request->night;
        $tour->content          = $request->description;
        $tour->status           = $request->status;
        $tour->hotals           = $hotals;
        $tour->meta_title       = $request->metaTitle ?? '';
        $tour->meta_keywords    = $request->metaKeywords ?? '';
        $tour->meta_description = $request->metaDescription ?? '';
        $tour->save();

        // Save day-wise data
        $day_array = [];
        $dayHeads       = $request->day_head;
        $dayContents    = $request->day_content;
        $dayWiseImages  = $request->file('dayWiseimage');

        foreach ($dayHeads as $key => $day_head) {
            $dayData = [
                'tour_id'     => $tour->id,
                'day_head'    => $day_head,
                'day_content' => $dayContents[$key] ?? '',
                'status'      => $tour->status,
            ];

            if (isset($dayWiseImages[$key])) {
                $file = $dayWiseImages[$key];
                $filename = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('uploads/tour/image'), $filename);
                $dayData['day_img'] = $filename;
            } else {
                $dayData['day_img'] = null;
            }

            $day_array[] = $dayData;
        }

        if (!empty($day_array)) {
            Daychart::insert($day_array);
        }

        return response()->json([
            'success' => true,
            'message' => 'Tour created successfully',
            'tour_id' => $tour->id,
        ]);

    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'success' => false,
            'errors' => $e->errors(),
        ], 422);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Something went wrong: ' . $e->getMessage(),
        ], 500);
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
