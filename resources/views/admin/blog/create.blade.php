@extends('admin.layouts.app')
@section('content')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
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
                <h3 class="card-title">Create Blog</h3>
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
              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{url('admin/blog/store')}}">
                @csrf
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">

                      <div class="form-group mt-2">
                        <label for="">Posted By</label>
                            <input type="text" name="posted_by" class="form-control" id=""value="{{old('posted_by')}}" required>
                              @if ($errors->has('posted_by'))
                                  <span class="required">
                                      <strong>{{ $errors->first('posted_by') }}</strong>
                                  </span>
                              @endif

                      </div>
                      <div class="form-group mt-2">
                        <label for="">Posted Date</label>
                            <input type="text" name="posted_date" class="form-control" id=""value="{{old('posted_date')}}" required>
                              @if ($errors->has('posted_date'))
                                  <span class="required">
                                      <strong>{{ $errors->first('posted_date') }}</strong>
                                  </span>
                              @endif

                      </div>
                      <div class="form-group mt-2">
                        <label for="image">Image</label>

                            <input type="file" name="image" class="form-control" id="image" required>
                              @if ($errors->has('image'))
                                  <span class="required">
                                      <strong>{{ $errors->first('image') }}</strong>
                                  </span>
                              @endif

                      </div>


                      <div class="form-group mt-2">
                        <label for="">Category</label>
                            <input type="text" name="category" class="form-control" id=""value="{{old('category')}}" required>
                              @if ($errors->has('category'))
                                  <span class="required">
                                      <strong>{{ $errors->first('category') }}</strong>
                                  </span>
                              @endif

                      </div>

                      <div class="form-group mt-2">
                        <label for="">Title</label>
                            <input type="text" name="title" class="form-control" id=""value="{{old('title')}}" required>
                              @if ($errors->has('title'))
                                  <span class="required">
                                      <strong>{{ $errors->first('title') }}</strong>
                                  </span>
                              @endif

                      </div>

                      <div class="form-group mt-2">
                        <label for="">Content</label>
                        <textarea rows="5" class="form-control" id="content" name="content" required></textarea>
                              @if ($errors->has('content'))
                                  <span class="required">
                                      <strong>{{ $errors->first('content') }}</strong>
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
                            <button id="submit" type="submit" class="btn btn-primary">Create Blog</button>

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
