<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homepage;

class AdminHomepageController extends Controller
{
    public function index()
    {
        $data = Homepage::first();
        if($data){
            // if exists, redirect to edit page
            return redirect()->route('homepage-edit',['id' => $data->id]);
        }
        return redirect(url('admin/homepage/create'));
    }

    public function create()
    {
        return view('admin.homepage.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string|max:255',
            'section1_heading' => 'nullable|string|max:255',
            'section1_description' => 'nullable|string',
            'section2_heading' => 'nullable|string|max:255',
            'section2_description' => 'nullable|string',
            'schema' => 'nullable|string',
            'faq_questions' => 'nullable|array',
            'faq_answers' => 'nullable|array',
        ]);

        // enforce single record
        if(Homepage::count() > 0){
            $existing = Homepage::first();
            return redirect()->route('homepage-edit',['id' => $existing->id])->with('error','Homepage already exists. You can edit it.');
        }

        $hp = new Homepage();
        $data = $request->only($hp->getFillable());
        // clean FAQ arrays
        if(isset($data['faq_questions']) && is_array($data['faq_questions'])){
            $data['faq_questions'] = array_values(array_filter($data['faq_questions'], fn($v) => $v !== null && $v !== ''));
        }
        if(isset($data['faq_answers']) && is_array($data['faq_answers'])){
            $data['faq_answers'] = array_values(array_filter($data['faq_answers'], fn($v) => $v !== null && $v !== ''));
        }
        $hp->fill($data);
        $hp->save();

        return redirect()->route('homepage-edit',['id' => $hp->id])->with('success','Homepage created successfully');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data = null;
        if($id){
            $data = Homepage::find($id);
        }
        if(!$data){
            $data = Homepage::first();
        }
        if(!$data){
            return redirect(url('admin/homepage/create'));
        }
        return view('admin.homepage.edit',compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'page_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string|max:255',
            'section1_heading' => 'nullable|string|max:255',
            'section1_description' => 'nullable|string',
            'section2_heading' => 'nullable|string|max:255',
            'section2_description' => 'nullable|string',
            'schema' => 'nullable|string',
            'faq_questions' => 'nullable|array',
            'faq_answers' => 'nullable|array',
        ]);

        $id = $request->id;
        $hp = Homepage::find($id);
        if(!$hp){
            return redirect()->route('homepage')->with('error','Homepage not found');
        }
        $data = $request->only($hp->getFillable());
        if(isset($data['faq_questions']) && is_array($data['faq_questions'])){
            $data['faq_questions'] = array_values(array_filter($data['faq_questions'], fn($v) => $v !== null && $v !== ''));
        }
        if(isset($data['faq_answers']) && is_array($data['faq_answers'])){
            $data['faq_answers'] = array_values(array_filter($data['faq_answers'], fn($v) => $v !== null && $v !== ''));
        }
        $hp->fill($data);
        $hp->save();

        return redirect()->route('homepage')->with('success','Homepage updated successfully');
    }
}
