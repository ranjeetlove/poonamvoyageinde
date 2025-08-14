@extends('admin.layouts.app')
@section('content')

<!-- Main content -->
<style>
   .add-more-day{
   display:flex;
   justify-content: space-between;
   align-items: start;
   }
   .w-100{
   width: 100%;
   }
   .add-more-btn{
   background: #1a668c;
   color: #fff;
   width: 99px;
   padding: 5px;
   margin: 40px 10px;
   }
   .added-image{
    margin-top:10px;
   }
   .hr-top-box{
    padding:10px;
   }
   .error strong{
      color:red;
      font-weight:500;
      font-size:14px;
   }
</style>
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
               <form class="p-2" enctype="multipart/form-data" role="form" id="myform">
                  @csrf
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Region</label>
                              <select name="region_id" class="form-control">
                                 <option value=""> Select Region </option>
                                 @foreach ($regions as $region)
                                 <option value="{{$region->id}}"> {{$region->region}}</option>
                                 @endforeach
                              </select>
                               @if ($errors->has('region_id'))
                              <span class="error">
                              <strong>please select any region</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                       <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="hotals">Hotals</label>
                              <select name="hotals[]" class="form-control selectpicker" multiple data-live-search="true" data-actions-box="true" data-selected-text-format="count > 1" data-width="100%">
                                 @foreach ($hotals as $hotal)
                                    <option value="{{ $hotal->id }}">{{ $hotal->name }} ({{ $hotal->city }})</option>
                                 @endforeach
                              </select>
                              @if ($errors->has('hotals'))
                                 <span class="error text-danger">
                                    <strong>Please select at least one hotel</strong>
                                 </span>
                              @endif
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Tour Name</label>
                              <input type="text" name="title" class="form-control" id="" >
                              @if ($errors->has('title'))
                              <span class="error">
                              <strong>{{ $errors->first('title') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Meta Title</label>
                              <input type="text" name="metaTitle" class="form-control" id="metaTitle" >
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Meta Keywords</label>
                              <input type="text" name="metaKeywords" class="form-control" id="metaKeywords" >
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Meta Description</label>
                              <textarea rows="2" class="form-control" id="metaDescription" name="metaDescription" ></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Slug</label>
                              <input type="text" name="slug" class="form-control" id="slug" >
                               @if ($errors->has('slug'))
                              <span class="error">
                              <strong>{{ $errors->first('slug') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="banner">Banner Image</label>
                              <input type="file" name="banner" class="form-control" id="banner" >
                              @if ($errors->has('banner'))
                              <span class="error">
                              <strong>{{ $errors->first('banner') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="">Total Days</label>
                              <input type="text" name="day" class="form-control" id=""value="{{old('day')}}" >
                              @if ($errors->has('day'))
                              <span class="error">
                              <strong>{{ $errors->first('day') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="">Total Nights</label>
                              <input type="text" name="night" class="form-control" id=""value="{{old('night')}}" >
                              @if ($errors->has('night'))
                              <span class="error">
                              <strong>{{ $errors->first('night') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="">Price</label>
                              <input type="text" name="price" class="form-control" id=""value="{{old('price')}}" >
                              @if ($errors->has('price'))
                              <span class="error">
                              <strong>{{ $errors->first('price') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="banner">Image</label>
                              <input type="file" name="image" class="form-control" id="image" >
                              @if ($errors->has('image'))
                              <span class="error">
                              <strong>{{ $errors->first('image') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group mt-2">
                              <label for="">Description</label>
                              {{-- <input type="text" name="description" class="form-control" id="" value="{{old('description')}}" > --}}
                              <textarea rows="3" class="form-control" id="description" name="description" ></textarea>
                              @if ($errors->has('description'))
                              <span class="error">
                              <strong>{{ $errors->first('description') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                         <div class="col-sm-12">
                           <div class="form-group mt-2">
                              <label>Highlight <span style="color:red; font-size:12px">Note: please add highlight with using ; (highlight 1; highlight 2; etc...)</span></label>
                             <textarea name="highlights" id="highlights" rows="3" class="form-control" value=""></textarea>
                              @if ($errors->has('highlights'))
                              <span class="error">
                              <strong>{{ $errors->first('highlights') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                         <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label>Include <span style="color:red; font-size:12px">Note: please add include with using ; (include 1; include 2; etc...)</span></label>
                             <textarea name="includes" id="includes" rows="3" class="form-control" value=""></textarea>
                              @if ($errors->has('includes'))
                              <span class="error">
                              <strong>{{ $errors->first('includes') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                         <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label>Not include <span style="color:red; font-size:12px">Note: please add Not include with using ; (Not include 1; Not include 2; etc...)</span></label>
                             <textarea name="notIncludes" id="notIncludes" rows="3" class="form-control" value=""></textarea>
                              @if ($errors->has('notIncludes'))
                              <span class="error">
                              <strong>{{ $errors->first('notIncludes') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                        <div class="col-sm-12 add-more-day">
                           <div id="point-div" class="w-100">
                              <div class="form-group mt-2">
                                 <div id="day-div">
                                    <div class="row">
                                       <div class="col-sm-6 ">
                                          <label for="">Day title</label>
                                          <input type="text" name="day_head[]" class="form-control" id="" ><br>
                                          @if ($errors->has('day_head'))
                                          <span class="error">
                                          <strong>{{ $errors->first('day_head') }}</strong>
                                          </span>
                                          @endif
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label for="banner">Day Image</label>

                                              <select name="dayWiseimage[]" class="form-control">
                                                <option value="">Select City Image</option>
                                                @foreach ($cityImages as $option)
                                                   <option value="{{ $option['value'] }}">{{ $option['label'] }}-{{ $option['value'] }}</option>
                                                @endforeach
                                             </select>

                                             <!-- <input type="file" name="dayWiseimage[]" class="form-control" id="dayWiseimage" > -->
                                             @if ($errors->has('dayWiseimage'))
                                             <span class="error">
                                             <strong>{{ $errors->first('dayWiseimage') }}</strong>
                                             </span>
                                             @endif
                                          </div>
                                       </div>
                                    </div>
                                    <textarea rows="5" class="form-control" id="day_content" name="day_content[]" ></textarea>
                                    {{-- <input type="text" name="night" class="form-control" id=""value="{{old('night')}}" > --}}
                                    @if ($errors->has('day_content'))
                                    <span class="error">
                                    <strong>{{ $errors->first('day_content') }}</strong>
                                    </span>
                                    @endif
                                 </div>
                              </div>
                              <label for="chkYes">
                              <input type="radio" class="status" value="Active" name="status" checked />
                              @if ($errors->has('status'))
                              <span class="error">
                              <strong>{{ $errors->first('status') }}</strong>
                              </span>
                              @endif
                              Active
                              </label>
                              <label for="chkNo">
                              <input type="radio" class="status" value="InActive" name="status" />
                              @if ($errors->has('status'))
                              <span class="error">
                              <strong>{{ $errors->first('status') }}</strong>
                              </span>
                              @endif
                              Inactive
                              </label>
                              <div class="form-group">
                                 <button id="submit" type="submit" class="btn btn-primary">Create tour</button>
                              </div>
                           </div>
                           <div>
                              <button id="btnCakePrice" class="btn add-more-btn " type="button" onclick="add()"><i class="fa fa-plus-circle"></i> Add more  </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@section('script')
<script>
function add() {
   var div = $("<div />");
   div.html(GetDynamicProductPriceWeight(""));
   $("#day-div").append(div);
};

$("body").on("click", ".removeRadio", function () {
   $(this).closest(".added-image").remove();
});
//  <hr class="hr-top-box">
function GetDynamicProductPriceWeight(value) {
   return `
   <div class="added-image position-relative" style="position: relative; border: 1px solid #ccc; padding: 15px; margin-bottom: 15px;">
      <div class="row">
         <div class="col-sm-6">
            <label for="">Day</label>
            <input type="text" name="day_head[]" class="form-control"><br>
            @if ($errors->has('day_head'))
            <span class="error">
               <strong>{{ $errors->first('day_head') }}</strong>
            </span>
            @endif
         </div>
         <div class="col-sm-6">
            <div class="form-group">
               <label for="banner">Day Image</label>
               <select name="dayWiseimage[]" class="form-control">
                                                <option value="">Select City Image</option>
                                                @foreach ($cityImages as $option)
                                                   <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                                                @endforeach
                                             </select>
               @if ($errors->has('dayWiseimage'))
               <span class="error">
                  <strong>{{ $errors->first('dayWiseimage') }}</strong>
               </span>
               @endif
            </div>
         </div>
      </div>

      <div>
         <textarea rows="5" class="form-control" id="day_content" name="day_content[]" style="padding-right: 50px;"></textarea>
         <button type="button" class="removeRadio fa fa-minus-circle fa-2x" 
            style="position: absolute; top: 5px; right: 10px; font-size: 1.5em; border: none; background: transparent; color: #dc3545;">
         </button>
      </div>

      @if ($errors->has('day_content'))
      <span class="error">
         <strong>{{ $errors->first('day_content') }}</strong>
      </span>
      @endif
   </div>
   `;
}
</script>
<script>
   $(function () {
      $('.selectpicker').selectpicker();
   });
</script>

<script>
$(document).ready(function () {
    $('#myform').on('submit', function (e) {
        e.preventDefault();

        // clear old alerts and errors
        $('.alert').remove();
        $('.error').remove();

        let form = $('#myform')[0];
        let formData = new FormData(form);

        $.ajax({
            url: "{{ url('admin/tour/store') }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('#submit').prop('disabled', true).text('Saving...');
            },
            success: function (response) {
               cosn
                $('#submit').prop('disabled', false).text('Create tour');
                $('body').prepend(`<div class="alert alert-success">✔ ${response.message}</div>`);
                $('#myform')[0].reset();
                $('.selectpicker').selectpicker('refresh');
            },
            error: function (xhr) {
                $('#submit').prop('disabled', false).text('Create tour');

                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, value) {
                        let input = $(`[name="${key}"]`);

                        // For array inputs like day_head[], day_content[]
                        if (key.includes('.')) {
                            let baseKey = key.split('.')[0] + '[]';
                            input = $(`[name="${baseKey}"]`).first();
                        }

                        input.after(`<span class="error text-danger d-block"><strong>${value[0]}</strong></span>`);
                    });
                } else {
                    $('body').prepend(`<div class="alert alert-danger">❌ ${xhr.responseJSON?.message || 'Unexpected error occurred.'}</div>`);
                }
            }
        });
    });
});

</script>


@endsection