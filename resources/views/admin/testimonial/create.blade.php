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
                <h3 class="card-title">Create Testimonial</h3>
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
              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{url('admin/testimonial/store')}}">
                @csrf
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mt-2">
                        <label for="bannername"> Country Name</label>
                             <input type="text" name=" country" class="form-control" id=""value="{{old('country')}}" >
                              @if ($errors->has(' country'))
                                  <span class="required">
                                      <strong>{{ $errors->first(' country') }}</strong>
                                  </span>
                              @endif
                      </div>
                      <div class="form-group mt-2">
                        <label for="bannername">Name</label>
                             <input type="text" name="name" class="form-control" id=""value="{{old('name')}}" >
                              @if ($errors->has('name'))
                                  <span class="required">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                      </div>
                      <div class="form-group mt-2">
                        <label for="bannername">Designation</label>
                             <input type="text" name="designation" class="form-control" id=""value="{{old('designation')}}" >
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
                        <label for="bannername">Comment Heading</label>
                             <input type="text" name="comment_head" class="form-control" id=""value="{{old('comment_head')}}" >
                              @if ($errors->has('comment_head'))
                                  <span class="required">
                                      <strong>{{ $errors->first('comment_head') }}</strong>
                                  </span>
                              @endif
                      </div>
                      <div class="form-group mt-2">
                        <label for="comment_content">Comment Content</label>
                             {{-- <input type="text" name="comment_content" class="form-control" id=""value="{{old('comment_content')}}" required> --}}
                             <textarea rows="5" class="form-control" id="comment_content" name="comment_content" ></textarea>
                              @if ($errors->has('comment_content'))
                                  <span class="required">
                                      <strong>{{ $errors->first('comment_content') }}</strong>
                                  </span>
                              @endif
                      </div>
                      <div class="form-group mt-2">
                        <label for="bannername">Rating</label>
                             {{-- <input type="text" name="rating" class="form-control" id=""value="{{old('rating')}}" > --}}
                            <select name="rating" class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                      </div>
                      <div class="form-group mt-2">
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
                        </div>
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Create Testimonial</button>

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

