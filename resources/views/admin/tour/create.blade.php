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
                <h3 class="card-title">Create Tour</h3>
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
              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{url('admin/tour/store')}}">
                @csrf
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group mt-2">
                            <label for="bannername">Region</label>
                            <select name="region_id" class="form-control">
                                <option value=""> Select Region </option>
                                @foreach ($regions as $region)
                                    <option value="{{$region->id}}"> {{$region->region}}</option>
                                @endforeach
                            </select>
                        </div>
                      <div class="form-group mt-2">
                        <label for="bannername">Tour Name</label>
                            <input type="text" name="title" class="form-control" id="" >
                      </div>
                          <div class="form-group mt-2">
                            <label for="banner">Banner Image</label>

                                <input type="file" name="banner" class="form-control" id="banner" >
                                  @if ($errors->has('banner'))
                                      <span class="">
                                          <strong>{{ $errors->first('banner') }}</strong>
                                      </span>
                                  @endif

                          </div>


                          <div class="form-group mt-2">
                            <label for="">Total Days</label>
                                <input type="text" name="day" class="form-control" id=""value="{{old('day')}}" >
                                  @if ($errors->has('day'))
                                      <span class="">
                                          <strong>{{ $errors->first('day') }}</strong>
                                      </span>
                                  @endif

                          </div>
                          <div class="form-group mt-2">
                            <label for="">Total Nights</label>
                                <input type="text" name="night" class="form-control" id=""value="{{old('night')}}" >
                                  @if ($errors->has('night'))
                                      <span class="">
                                          <strong>{{ $errors->first('night') }}</strong>
                                      </span>
                                  @endif
                          </div>
                          <div class="form-group mt-2">
                            <label for="">Price</label>
                                <input type="text" name="price" class="form-control" id=""value="{{old('price')}}" >
                                  @if ($errors->has('price'))
                                      <span class="">
                                          <strong>{{ $errors->first('price') }}</strong>
                                      </span>
                                  @endif

                          </div>

                          <div class="form-group mt-2">
                            <label for="banner">Image</label>

                                <input type="file" name="image" class="form-control" id="image" >
                                  @if ($errors->has('image'))
                                      <span class="">
                                          <strong>{{ $errors->first('image') }}</strong>
                                      </span>
                                  @endif
                          </div>
                          <div class="form-group mt-2">
                            <label for="">Content</label>
                                {{-- <input type="text" name="content" class="form-control" id=""value="{{old('content')}}" > --}}
                                <textarea rows="5" class="form-control" id="content" name="content" ></textarea>
                                  @if ($errors->has('content'))
                                      <span class="">
                                          <strong>{{ $errors->first('content') }}</strong>
                                      </span>
                                  @endif
                          </div>

                          <div id="point-div">
                          <div class="form-group mt-2">
                            <label for="">Day Schedule</label>
                            <div id="day-div">
                                <input type="text" name="day_head[]" class="form-control" id="" ><br>
                                  @if ($errors->has('day_head'))
                                      <span class="">
                                          <strong>{{ $errors->first('day_head') }}</strong>
                                      </span>
                                  @endif

                                  <textarea rows="5" class="form-control" id="day_content" name="day_content[]" ></textarea>
                                  {{-- <input type="text" name="night" class="form-control" id=""value="{{old('night')}}" > --}}
                                  @if ($errors->has('day_content'))
                                      <span class="">
                                          <strong>{{ $errors->first('day_content') }}</strong>
                                      </span>
                                  @endif
    							<button id="btnCakePrice" style="margin-left: 15px;border: none;" class="fa fa-plus-circle fa-2x" type="button" onclick="add()">   </button>
                            </div>
                          </div>

                          <label for="chkYes">
                              <input type="radio" class="status" value="Active" name="status" checked />
                              @if ($errors->has('status'))
                                <span class="">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Active
                          </label>
                          <label for="chkNo">
                              <input type="radio" class="status" value="InActive" name="status" />
                              @if ($errors->has('status'))
                                <span class="">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                              Inactive
                          </label>
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Create tour</button>

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
							 return  '<div class="added-image"><div id="day-div"><input type="text" name="day_head[]" class="form-control" id="" ><br><textarea rows="5" class="form-control" id="day_content" name="day_content[]" ></textarea><button type="button" class="removeRadio fa fa-minus-circle fa-2x" style="font-size: 2em;border: none;margin-left: 15px;"></button></div> '
						 }

                         CKEDITOR.replace( 'content' );
                         CKEDITOR.replace( 'day_content[]' );

					 </script>
@endsection
