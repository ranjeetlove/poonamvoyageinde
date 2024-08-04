@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Testimonial</h3>
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

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('testimonial-edit') }}">
                @csrf
                {{-- @method('PATCH') --}}
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                        <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text">
                          <div class="form-group mt-2">
                            <label for="bannername"> Country Name</label>
                                 <input type="text" name=" country" class="form-control" id=""value="{{$data->country}}" >
                                  @if ($errors->has(' country'))
                                      <span class="required">
                                          <strong>{{ $errors->first(' country') }}</strong>
                                      </span>
                                  @endif
                          </div>
                          <div class="form-group mt-2">
                            <label for="bannername">Testimonial Name</label>
                                 <input type="text" name="name" class="form-control" id=""value="{{$data->name}}" >
                                  @if ($errors->has('name'))
                                      <span class="required">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif

                          </div>
                          <div class="form-group mt-2">
                            <label for="bannername">Designation</label>
                                 <input type="text" name="designation" class="form-control" id=""value="{{$data->designation}}" >
                                  @if ($errors->has('designation'))
                                      <span class="required">
                                          <strong>{{ $errors->first('designation') }}</strong>
                                      </span>
                                  @endif

                          </div>
                          
                          <div class="form-group mt-2">
                            <label for="image">Image</label>

                                <input type="file" name="image" class="form-control" id="image" >
                                  @if ($errors->has('image'))
                                      <span class="required">
                                          <strong>{{ $errors->first('image') }}</strong>
                                      </span>
                                  @endif
                          </div>
                          <div class="form-group mt-2">
                            <label for="bannername">Comment head</label>
                                 <input type="text" name="comment_head" class="form-control" id=""value="{{$data->comment_head}}" required>
                                  @if ($errors->has('comment_head'))
                                      <span class="required">
                                          <strong>{{ $errors->first('comment_head') }}</strong>
                                      </span>
                                  @endif

                          </div>
                          <div class="form-group mt-2">
                            <label for="bannername">Comment content</label>
                            <textarea rows="5" class="form-control" id="comment_content" name="comment_content" >{{$data->comment_content}}</textarea>
                                  @if ($errors->has('comment_content'))
                                      <span class="required">
                                          <strong>{{ $errors->first('comment_content') }}</strong>
                                      </span>
                                  @endif

                          </div>
                          <div class="form-group mt-2">
                            <label for="bannername">Rating</label>
                                 <input type="text" name="rating" class="form-control" id=""value="{{$data->rating}}" required>
                                  @if ($errors->has('rating'))
                                      <span class="required">
                                          <strong>{{ $errors->first('rating') }}</strong>
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
                            <button id="submit" type="submit" class="btn btn-primary">Update testimonial</button>
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
        CKEDITOR.replace( 'comment_content' );
    </script>
    <!-- /.content -->
@endsection
