@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Tour</h3>
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

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('tour-edit') }}">
                @csrf
                {{-- @method('PATCH') --}}
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                          <div class="form-group mt-2">
                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">
                              <input type="button" class="form-control" value="{{$data->region->region}}" readonly><br>
                          </div>
                          <div class="form-group mt-2">
                            <label for="bannername">Tour Name</label>
                                <input type="text" name="title" class="form-control" id="" value="{{$data->title}}" >
                          </div>
                          <div class="form-group mt-2">
                            <label for="banner">Update Banner Image</label>

                                <input type="file" name="banner" class="form-control" id="banner" value="{{$data->banner}}" >
                                  @if ($errors->has('banner'))
                                      <span class="">
                                          <strong>{{ $errors->first('banner') }}</strong>
                                      </span>
                                  @endif
                          </div>
                          <div class="form-group mt-2">
                            <label for="">Total Days</label>
                                <input type="text" name="day" class="form-control" id=""value="{{$data->day}}" >
                                  @if ($errors->has('day'))
                                      <span class="">
                                          <strong>{{ $errors->first('day') }}</strong>
                                      </span>
                                  @endif

                          </div>
                          <div class="form-group mt-2">
                            <label for="">Total Nights</label>
                                <input type="text" name="night" class="form-control" id=""value="{{$data->night}}" >
                                  @if ($errors->has('night'))
                                      <span class="">
                                          <strong>{{ $errors->first('night') }}</strong>
                                      </span>
                                  @endif
                          </div>
                          <div class="form-group mt-2">
                            <label for="">Price</label>
                                <input type="text" name="price" class="form-control" id=""value="{{$data->price}}" >
                                  @if ($errors->has('price'))
                                      <span class="">
                                          <strong>{{ $errors->first('price') }}</strong>
                                      </span>
                                  @endif

                          </div>

                          <div class="form-group mt-2">
                            <label for="banner">Image</label>

                                <input type="file" name="image" class="form-control" id="image" value="{{$data->image}}" >
                                  @if ($errors->has('image'))
                                      <span class="">
                                          <strong>{{ $errors->first('image') }}</strong>
                                      </span>
                                  @endif
                          </div>
                          <div class="form-group mt-2">
                            <label for="">Content</label>
                                {{-- <input type="text" name="content" class="form-control" id=""value="{{old('content')}}" > --}}
                                <textarea rows="5" class="form-control" id="content" name="content" >{!!$data->content!!}</textarea>
                                  @if ($errors->has('content'))
                                      <span class="">
                                          <strong>{{ $errors->first('content') }}</strong>
                                      </span>
                                  @endif
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
                            <button id="submit" type="submit" class="btn btn-primary">Update Tour</button>
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
