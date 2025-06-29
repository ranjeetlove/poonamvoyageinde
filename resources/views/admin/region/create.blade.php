@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          @if(session()->has('success'))
                                      <div class="alert alert-success">
                                          {{ session()->get('success') }}
                                      </div>
                                  @endif
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Region</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if(Session::has('flash_success'))
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>
              @endif
              @if(Session::has('error'))
              <div class="alert alert-danger m-2">
                  <button type="button" class="close" data-dismiss="alert">×</button>
              {{ Session::get('error') }}
              </div>
          @endif
              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{url('admin/region/store')}}">
                @csrf
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">

                      <div class="form-group mt-2">
                        <label for="bannername">Region Name</label>
                            <input type="text" name="region" class="form-control" id="" value="{{old('region')}}" >
                              @if ($errors->has('region'))
                                  <span class="">
                                      <strong>{{ $errors->first('region') }}</strong>
                                  </span>
                              @endif

                      </div>
                          <div class="form-group mt-2">
                            <label for="banner">Banner Image</label>

                                <input type="file" name="banner" class="form-control" id="banner" >
                                  @if ($errors->has('banner'))
                                      <span class="">
                                          <strong>{{ $errors->first('banner') }}</strong>
                                      </span>
                                  @endif
                          </div>
                          <div class="form-group mt-2">
                            <label for="image">Home Page Thumbnail</label>
                                <input type="file" name="image" class="form-control" id="image" >
                                  @if ($errors->has('image'))
                                      <span class="">
                                          <strong>{{ $errors->first('image') }}</strong>
                                      </span>
                                  @endif
                          </div>
                          <div class="form-group mt-2">
                            <label for="heading">Banner Heading</label>
                                 <input type="text" name="heading" class="form-control" id=""value="{{old('heading')}}" >
                          </div>
                           <div class="form-group mt-2">
                            <label for="heading">Meta title</label>
                                 <input type="text" name="meta_title" class="form-control" id=""value="{{old('meta_title')}}" >
                          </div>
                           <div class="form-group mt-2">
                            <label for="heading">Meta description</label>
                                 <input type="text" name="meta_description" class="form-control" id=""value="{{old('meta_description')}}" >
                          </div>
                            <div class="form-group mt-2">
                            <label for="heading">Meta keywords</label>
                                 <input type="text" name="meta_keywords" class="form-control" id=""value="{{old('meta_keywords')}}" >
                          </div>
                          <div class="form-group mt-2">
                            <label for="heading">Title of the page</label>
                                 <input type="text" name="title" class="form-control" id=""value="{{old('title')}}" >
                          </div>
                          <div class="form-group mt-2">
                            <label for="content">Content of the page</label>
                                 {{-- <input type="text" name="content" class="form-control" id=""value="{{old('content')}}" > --}}
                                 <textarea rows="5" class="form-control" id="content" name="content" ></textarea>
                          </div>
                          <div class="form-group mt-2">
                            <label for="bannername">Rating</label>
                                 {{-- <input type="text" name="rating" class="form-control" id=""value="{{old('rating')}}" > --}}
                                <select name="rating" >
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                          </div>
                          <label for="chkYes">
                              <input type="radio" class="status" value="Active" name="status" checked />
                              @if ($errors->has('status'))
                                <span class="">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Active
                          </label>
                          <label for="chkNo">
                              <input type="radio" class="status" value="InActive" name="status" />
                              @if ($errors->has('status'))
                                <span class="">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Inactive
                          </label>
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Create Region</button>

                          </div>
                    </div>
                 </div>
                </div>
              </form>
          </div>
        </div>
       </div>
      </div><!-- /.container-fluid -->
    </section>
    <script>
      CKEDITOR.replace( 'content' );
      </script> 
    <!-- /.content -->
@endsection
