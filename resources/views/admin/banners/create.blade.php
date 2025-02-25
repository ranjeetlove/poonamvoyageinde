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
                <h3 class="card-title">Create Banners</h3>
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
              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{url('admin/banners/store')}}">
                @csrf
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">

                      <div class="form-group mt-2">
                        <label for="bannername">Banner Name</label>
                            <select name="name"  class="form-control">
                                <option value="">Select Banner Name</option>
                                <option value="Home Banner 1">Home Page Banner 1</option>
                                <option value="Home Banner 2">Home Page Banner 2</option>
                                <option value="Home Banner 3">Home Page Banner 3</option>
                                <option value="Home Banner 4">Home Page Banner 4</option>
                                <option value="About Us Banner">About Us</option>
                                <option value="Tailor-Made Trip Banner">Tailor-Made Trip To India</option>
                                <option value="Comments Banner">Comments</option>
                                <option value="Blog Banner">Blog</option>
                                <option value="Contact Us Banner">Contact Us</option>
                                <option value="Privacy Policy Banner">Privacy Policy</option>
                                <option value="Terms and Conditions Banner">Terms and Conditions</option>
                          </select>
                            {{-- <input type="text" name="name" class="form-control" id=""value="{{old('name')}}" required> --}}
                              @if ($errors->has('name'))
                                  <span class="required">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif

                      </div>
                          <div class="form-group mt-2">
                            <label for="image">Banner Image</label>

                                <input type="file" name="image" class="form-control" id="image" required>
                                  @if ($errors->has('image'))
                                      <span class="required">
                                          <strong>{{ $errors->first('image') }}</strong>
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
    <!-- /.content -->
@endsection
