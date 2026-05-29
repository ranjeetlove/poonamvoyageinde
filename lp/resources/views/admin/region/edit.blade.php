@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Region</h3>
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

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('region-edit') }}">
                @csrf
                {{-- @method('PATCH') --}}
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                          <div class="form-group mt-2">
                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">
                              <input type="button" class="form-control" value="{{$data->region}}" readonly><br>                              
                            <label for="banner">Update Current Banner</label>
                                <input type="file" name="banner" class="form-control" id="banner" value="{{$data->banner}}"><br>
                                  @if ($errors->has('banner'))
                                      <span class="required">
                                          <strong>{{ $errors->first('banner') }}</strong>
                                      </span>
                                  @endif
                            <label for="image">Update Homepage Thumbnail</label>
                                <input type="file" name="image" class="form-control" id="image" value="{{$data->image}}"><br>
                                  @if ($errors->has('image'))
                                      <span class="required">
                                          <strong>{{ $errors->first('image') }}</strong>
                                      </span>
                                  @endif
                            <label for="image">Heading</label>
                                <input type="text" class="form-control" name='heading' value="{{$data->heading}}" ><br>
                            <label for="image">Content</label>
                                <textarea rows="20" class="form-control" name="content" >{{$data->content}}</textarea><br>
                            <label for="rating">Rating</label>                           
                              <select name="rating">                                
                                <option value="{{$data->rating}}">{{$data->rating}}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select><br>
                            <label for="status">Status</label><br>                           
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
                            <button id="submit" type="submit" class="btn btn-primary">Update Region</button>
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
