@extends('admin.layouts.app')
@section('content')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if(Session::has('flash_success'))
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>
              @endif
              {{-- <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('banners.update',$data->id) }}"> --}}

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('blog-edit') }}">
                @csrf
                {{-- @method('PATCH') --}}
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                          <div class="form-group mt-2">
                              <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">
                              <input type="text" class="form-control" name='posted_by' value="{{$data->posted_by}}" ><br>
                              <input type="text" class="form-control" name='posted_date' value="{{$data->posted_date}}" ><br>
                              <label for="image">Update Image</label>

                              <input type="file" name="image" class="form-control" id="image" value="{{$data->image}}">
                                @if ($errors->has('image'))
                                    <span class="required">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif

                        </div>
                              <input type="text" class="form-control" name='category' value="{{$data->category}}" ><br>
                              <input type="text" class="form-control" name='title' value="{{$data->title}}" ><br>
                              <input type="text" placeholder="meta description" class="form-control" name='meta_description' value="{{$data->meta_description}}"><br>
                              <input type="text" placeholder="meta keywords" class="form-control" name='meta_keywords' value="{{$data->meta_keywords}}" ><br>
                              <textarea rows="20" class="form-control" name="content" required>{{$data->content}}</textarea>

                          <label for="chkYes">
                              <input type="radio" class="status" value="Active" name="status" @if($data->status == 'Active') checked @endif/>
                              @if ($errors->has('status'))
                                <span class="required">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Active
                          </label>
                          <label for="chkNo">
                              <input type="radio" class="status" value="InActive" name="status" @if($data->status == 'InActive') checked @endif />
                              @if ($errors->has('status'))
                                <span class="required">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Inactive
                          </label>
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Update Blog</button>
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
