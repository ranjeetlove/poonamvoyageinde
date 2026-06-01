@extends('admin.layouts.app')
@section('content')
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          @if(session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
          @endif
          @if(session()->has('error'))
            <div class="alert alert-danger">{{ session()->get('error') }}</div>
          @endif
          <form role="form" method="post" action="{{url('admin/homepage/store')}}">
            @csrf
            <div class="card card-primary">
              <div class="card-header"><h3 class="card-title">SEO Settings</h3></div>
              <div class="card-body">
                <div class="form-group">
                  <label>Page Title</label>
                  <input type="text" name="page_title" class="form-control" value="{{old('page_title')}}">
                  @if ($errors->has('page_title'))<span class="required"><strong>{{ $errors->first('page_title') }}</strong></span>@endif
                </div>
                <div class="form-group">
                  <label>Meta Description</label>
                  <textarea name="meta_description" class="form-control" rows="3">{{old('meta_description')}}</textarea>
                  @if ($errors->has('meta_description'))<span class="required"><strong>{{ $errors->first('meta_description') }}</strong></span>@endif
                </div>
                <div class="form-group">
                  <label>Meta Keywords</label>
                  <input type="text" name="meta_keywords" class="form-control" value="{{old('meta_keywords')}}">
                  @if ($errors->has('meta_keywords'))<span class="required"><strong>{{ $errors->first('meta_keywords') }}</strong></span>@endif
                </div>
              </div>
            </div>

            <div class="card card-secondary">
              <div class="card-header"><h3 class="card-title">Section 1</h3></div>
              <div class="card-body">
                <div class="form-group">
                  <label>Section 1 Heading (H1)</label>
                  <input type="text" name="section1_heading" class="form-control" value="{{old('section1_heading')}}">
                  @if ($errors->has('section1_heading'))<span class="required"><strong>{{ $errors->first('section1_heading') }}</strong></span>@endif
                </div>
                <div class="form-group">
                  <label>Section 1 Description</label>
                  <textarea id="section1_description" name="section1_description" class="form-control" rows="6">{{old('section1_description')}}</textarea>
                  @if ($errors->has('section1_description'))<span class="required"><strong>{{ $errors->first('section1_description') }}</strong></span>@endif
                </div>
              </div>
            </div>

            <div class="card card-secondary">
              <div class="card-header"><h3 class="card-title">Section 2</h3></div>
              <div class="card-body">
                <div class="form-group">
                  <label>Section 2 Heading (H2)</label>
                  <input type="text" name="section2_heading" class="form-control" value="{{old('section2_heading')}}">
                  @if ($errors->has('section2_heading'))<span class="required"><strong>{{ $errors->first('section2_heading') }}</strong></span>@endif
                </div>
                <div class="form-group">
                  <label>Section 2 Description</label>
                  <textarea id="section2_description" name="section2_description" class="form-control" rows="6">{{old('section2_description')}}</textarea>
                  @if ($errors->has('section2_description'))<span class="required"><strong>{{ $errors->first('section2_description') }}</strong></span>@endif
                </div>
              </div>
            </div>

            <div class="card card-secondary">
              <div class="card-header"><h3 class="card-title">Schema (JSON-LD)</h3></div>
              <div class="card-body">
                <div class="form-group">
                  <label>Schema (JSON-LD)</label>
                  <textarea name="schema" class="form-control" rows="5">{{old('schema')}}</textarea>
                  @if ($errors->has('schema'))<span class="required"><strong>{{ $errors->first('schema') }}</strong></span>@endif
                </div>
              </div>
            </div>

            <div class="card card-secondary">
              <div class="card-header"><h3 class="card-title">FAQ</h3></div>
              <div class="card-body">
                <div id="faq-list">
                  <div class="faq-item mb-2">
                    <div class="form-group">
                      <label>Question</label>
                      <input type="text" name="faq_questions[]" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Answer</label>
                      <textarea name="faq_answers[]" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-sm btn-danger remove-faq">Remove</button>
                    <hr>
                  </div>
                </div>
                <button type="button" id="add-faq" class="btn btn-sm btn-primary">Add FAQ</button>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Create Homepage</button>
            </div>
          </form>
        </div>
       </div>
      </div>
    </section>

@section('script')
  <script>
    CKEDITOR.replace('section1_description');
    CKEDITOR.replace('section2_description');
  </script>
  <script>
    // FAQ add/remove
    document.addEventListener('DOMContentLoaded', function(){
      const addBtn = document.getElementById('add-faq');
      const list = document.getElementById('faq-list');
      addBtn.addEventListener('click', ()=>{
        const item = document.createElement('div');
        item.className = 'faq-item mb-2';
        item.innerHTML = `
          <div class="form-group">
            <label>Question</label>
            <input type="text" name="faq_questions[]" class="form-control">
          </div>
          <div class="form-group">
            <label>Answer</label>
            <textarea name="faq_answers[]" class="form-control" rows="3"></textarea>
          </div>
          <button type="button" class="btn btn-sm btn-danger remove-faq">Remove</button>
          <hr>`;
        list.appendChild(item);
      });

      document.addEventListener('click', function(e){
        if(e.target && e.target.classList.contains('remove-faq')){
          e.target.closest('.faq-item').remove();
        }
      });
    });
  </script>
@endsection
@endsection
