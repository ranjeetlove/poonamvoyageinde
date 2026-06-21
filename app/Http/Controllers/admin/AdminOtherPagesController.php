<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OtherPage;

class AdminOtherPagesController extends Controller
{
    public function index($page_type)
    {
        $data = OtherPage::where('page_type', $page_type)->first();
        if ($data) {
            return redirect()->route('pages-edit', ['page_type' => $page_type]);
        }
        return redirect(url("admin/pages/{$page_type}/create"));
    }

    public function create($page_type)
    {
        return view('admin.other-pages.create', compact('page_type'));
    }

    public function store(Request $request, $page_type)
    {
        $request->validate([
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string|max:255',
            'schema' => 'nullable|string',
            'faq_questions' => 'nullable|array',
            'faq_answers' => 'nullable|array',
        ]);

        if (OtherPage::where('page_type', $page_type)->exists()) {
            return redirect()->route('pages-edit', ['page_type' => $page_type])->with('error', 'This page already exists. You can edit it.');
        }

        $questions = array_values(array_filter($request->faq_questions ?? [], fn($value) => trim((string)$value) !== ''));
        $answers = array_values(array_filter($request->faq_answers ?? [], fn($value) => trim((string)$value) !== ''));

        if (count($questions) === 0 || count($answers) === 0 || count($questions) !== count($answers)) {
            return back()->withInput()->with('error', 'Please add at least one FAQ question and answer, and make sure each pair is complete.');
        }

        $page = new OtherPage();
        $page->page_type = $page_type;
        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->meta_keywords = $request->meta_keywords;
        $page->c_schema = $request->schema;
        $page->faq = [
            'questions' => $questions,
            'answers' => $answers,
        ];
        $page->save();

        return redirect()->route('pages-edit', ['page_type' => $page_type])->with('success', 'Page created successfully');
    }

    public function edit($page_type)
    {
        $data = OtherPage::where('page_type', $page_type)->first();
        if (!$data) {
            return redirect(url("admin/pages/{$page_type}/create"));
        }
        return view('admin.other-pages.edit', compact('data', 'page_type'));
    }

    public function update(Request $request, $page_type)
    {
        $request->validate([
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string|max:255',
            'schema' => 'nullable|string',
            'faq_questions' => 'nullable|array',
            'faq_answers' => 'nullable|array',
        ]);

        $page = OtherPage::where('page_type', $page_type)->first();
        if (!$page) {
            return redirect()->route('pages', ['page_type' => $page_type])->with('error', 'Page not found');
        }

        $questions = array_values(array_filter($request->faq_questions ?? [], fn($value) => trim((string)$value) !== ''));
        $answers = array_values(array_filter($request->faq_answers ?? [], fn($value) => trim((string)$value) !== ''));

        if (count($questions) === 0 || count($answers) === 0 || count($questions) !== count($answers)) {
            return back()->withInput()->with('error', 'Please add at least one FAQ question and answer, and make sure each pair is complete.');
        }

        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->meta_keywords = $request->meta_keywords;
        $page->c_schema = $request->schema;
        $page->faq = [
            'questions' => $questions,
            'answers' => $answers,
        ];
        $page->save();

        return redirect()->route('pages', ['page_type' => $page_type])->with('success', 'Page updated successfully');
    }
}
