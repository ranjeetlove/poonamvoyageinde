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
                <h3 class="card-title">Create about</h3>
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
              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{url('admin/about/store')}}">
                @csrf
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">

                      <div class="form-group mt-2">
                        <label for="">Name</label>
                            <input type="text" name="name" class="form-control" id=""value="{{old('name')}}" required>
                              @if ($errors->has('name'))
                                  <span class="required">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif

                      </div>
                      <div class="form-group mt-2">
                        <label for="">Designation</label>
                            <input type="text" name="designation" class="form-control" id=""value="{{old('designation')}}" required>
                              @if ($errors->has('designation'))
                                  <span class="required">
                                      <strong>{{ $errors->first('designation') }}</strong>
                                  </span>
                              @endif
                      </div>
                      <div class="form-group mt-2">
                        <label for="image">Owner Image</label>

                            <input type="file" name="image" class="form-control" id="image" required>
                              @if ($errors->has('image'))
                                  <span class="required">
                                      <strong>{{ $errors->first('image') }}</strong>
                                  </span>
                              @endif

                      </div>

                      <div class="form-group mt-2">
                        <label for="">About owner</label>
                            <input type="text" name="about_owner" class="form-control" id=""value="{{old('about_owner')}}" required>
                              @if ($errors->has('about_owner'))
                                  <span class="required">
                                      <strong>{{ $errors->first('about_owner') }}</strong>
                                  </span>
                              @endif

                      </div>

                      <div class="form-group mt-2">
                        <label for="">About heading</label>
                            <input type="text" name="about_head" class="form-control" id=""value="{{old('about_head')}}" required>
                              @if ($errors->has('about_head'))
                                  <span class="required">
                                      <strong>{{ $errors->first('about_head') }}</strong>
                                  </span>
                              @endif

                      </div>

                      <div class="form-group mt-2">
                        <label for="">About content</label>
                            <textarea rows="5" class="form-control" id="about_content" name="about_content" required></textarea>
                            {{-- <input type="text" name="about_content" class="form-control" id=""value="{{old('about_content')}}" required> --}}
                              @if ($errors->has('about_content'))
                                  <span class="required">
                                      <strong>{{ $errors->first('about_content') }}</strong>
                                  </span>
                              @endif

                      </div>

                          <label for="chkYes">
                              <input type="radio" class="status" value="Active" name="status" checked />
                              @if ($errors->has('status'))
                                <span class="required">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Active
                          </label>
                          <label for="chkNo">
                              <input type="radio" class="status" value="InActive" name="status" />
                              @if ($errors->has('status'))
                                <span class="required">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Inactive
                          </label>
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Create Banner</button>

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
        CKEDITOR.replace( 'about_content' );
    </script> 
    <!-- /.content -->
@endsection
