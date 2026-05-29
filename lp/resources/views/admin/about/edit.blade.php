@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit About</h3>
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

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('about-edit') }}">
                @csrf
                {{-- @method('PATCH') --}}
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                          <div class="form-group mt-2">
                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">
                            <label for="image">Name</label>
                              <input type="text" class="form-control" name="name" value="{{$data->name}}" ><br>
                              <label for="image">Designation</label>
                              <input type="text" class="form-control" name="designation" value="{{$data->designation}}" ><br>
                              <label for="image">Update Owner Image</label>

                              <input type="file" name="image" class="form-control" id="image" value="{{$data->image}}">
                                @if ($errors->has('image'))
                                    <span class="required">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                              <label for="image">About Owner</label>
                              <input type="text" class="form-control" name="about_owner" value="{{$data->about_owner}}" ><br>
                              <label for="image">About Heading</label>
                              <input type="text" class="form-control" name="about_head" value="{{$data->about_head}}" ><br>
                              <label for="image">About Content</label>
                              <textarea rows="5" class="form-control" name="about_content" required>{{$data->about_content}}</textarea>
                              {{-- <input type="text" class="form-control" name="about_content" value="{{$data->about_content}}" ><br> --}}
                              <label for="image">Status</label>
                              <div class="form-group mt-2">
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
                        </div>
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Update About</button>
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
