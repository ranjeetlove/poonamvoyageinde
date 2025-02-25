@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Banners</h3>
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

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('banner-edit') }}">
                @csrf
                {{-- @method('PATCH') --}}
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                          <div class="form-group mt-2">
                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">
                              <input type="buttun" class="form-control" value="{{$data->name}}" readonly><br>
                              <label for="">Current Banner</label>
                                  <div class="table table-bordered">
                                    <img src="{{asset('uploads/banners/'.$data->image)  }}" alt="" class="img-responsive" width="40%" />
                                  </div>
                            <label for="image">Update Banner Image</label>
                            
                                <input type="file" name="image" class="form-control" id="image" value="{{$data->image}}">
                                  @if ($errors->has('image'))
                                      <span class="required">
                                          <strong>{{ $errors->first('image') }}</strong>
                                      </span>
                                  @endif  
                               
                          </div>
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
                            <button id="submit" type="submit" class="btn btn-primary">Update Banner</button>
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
    <!-- /.content -->
@endsection
