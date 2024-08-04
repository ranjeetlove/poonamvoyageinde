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
                <h3 class="card-title">Create Video</h3>
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
              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{url('/admin/video/store')}}">
                @csrf
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mt-2">
                        <label for="bannername">Video Name</label>
                            <input type="text" name="name" class="form-control" id="" required>
                      </div>
                          <div class="form-group mt-2">
                            <label for="video">URL</label>
                                <input type="text" name="video" class="form-control" id=""value="{{old('video')}}" required>
                                  @if ($errors->has('video'))
                                      <span class="required">
                                          <strong>{{ $errors->first('video') }}</strong>
                                      </span>
                                  @endif
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
                            <button id="submit" type="submit" class="btn btn-primary">Create Video</button>

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
@section('script')
				<script>
					function add() {
					//  alert('hii');
							 var div = $("<div />");
							 div.html(GetDynamicProductPriceWeight(""));
							 $("#day-div").append(div);
						 };
						 $("body").on("click", ".removeRadio", function () {
							 $(this).closest(".added-image").remove();
						 });
						 function GetDynamicProductPriceWeight(value) {
							 return  '<div class="added-image"><div id="day-div"><input type="text" name="day_head[]" class="form-control" id="" required><br><textarea rows="5" class="form-control" id="day_content" name="day_content[]" required></textarea><button type="button" class="removeRadio fa fa-minus-circle fa-2x" style="font-size: 2em;border: none;margin-left: 15px;"></button></div> '
						 }

                         CKEDITOR.replace( 'content' );
                         CKEDITOR.replace( 'day_content[]' );

					 </script>
@endsection
