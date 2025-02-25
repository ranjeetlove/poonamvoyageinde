@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Video</h3>
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

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('video-edit') }}">
                @csrf
                {{-- @method('PATCH') --}}
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mt-2">
                        <label for="bannername">Video Name</label>
                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">
                            <input type="text" name="name" class="form-control" id="" value="{{$data->name}}">
                      </div>
                          <div class="form-group mt-2">
                            <label for="video">URL</label>
                                <input type="text" name="video" class="form-control" id=""value="{{$data->video}}">
                          </div>
                          <div class="form-group mt-2">
                            <label for="">Status</label>

                          <label for="chkYes">
                              <input type="radio" class="status" value="Active" name="status" @if($data->status == 'Active') checked @endif/>
                              @if ($errors->has('status'))
                                <span class="">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Active
                          </label>
                          <label for="chkNo">
                              <input type="radio" class="status" value="InActive" name="status" @if($data->status == 'InActive') checked @endif />
                              @if ($errors->has('status'))
                                <span class="">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Inactive
                          </label>
                          </div>
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Update Video</button>
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
