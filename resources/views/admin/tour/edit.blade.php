@extends('admin.layouts.app')
@section('content')

<style>
   .add-more-day {
      display: flex;
      justify-content: space-between;
      align-items: start;
   }
   .w-100 { width: 100%; }
   .add-more-btn {
      background: #1a668c;
      color: #fff;
      width: 120px;
      padding: 6px;
      margin: 30px 10px;
   }
   .added-image {
      margin-top: 10px;
   }
   .error strong {
      color: red;
      font-weight: 500;
      font-size: 14px;
   }
</style>

<section class="content">
<div class="container-fluid">
   <div class="row">
      <div class="col-md-12">
         <div class="card card-primary">
            <div class="card-header">
               <h3 class="card-title">Edit Tour</h3>
            </div>

            @if(Session::has('flash_success'))
            <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">×</button>
               {{ Session::get('flash_success') }}
            </div>
            @endif

            <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('tour-edit') }}">
               @csrf
               <input type="hidden" name="id" value="{{ $data->id }}">
               <input type="hidden" name="region_id" value="{{ $data->region_id }}">

               <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group mt-2">
                     <label>Region</label>
                     <input type="text" value="{{ $data->region->region }}" class="form-control" readonly>
                    </div>
                  </div>

                  <!-- -->
               @php
               $selectedHotals = is_string($data->hotals) 
               ? explode(',', $data->hotals) 
               : ($data->hotals ?? []);

            @endphp

<div class="col-sm-6">
   <div class="form-group mt-2">
      <label for="hotals">Hotels</label>
      <select name="hotals[]" class="form-control selectpicker" multiple data-live-search="true" data-actions-box="true" data-selected-text-format="count > 1" data-width="100%">
         @foreach ($hotals as $hotal)
            <option value="{{ $hotal->id }}" 
                {{ in_array($hotal->id, $selectedHotals) ? 'selected' : '' }}>
                {{ $hotal->name }} ({{ $hotal->city }})
            </option>
         @endforeach
      </select>

      @if ($errors->has('hotals'))
         <span class="error text-danger">
            <strong>Please select at least one hotel</strong>
         </span>
      @endif
   </div>
</div>


                  <div class="col-sm-6 mt-2">
                     <label>Tour Name</label>
                     <input type="text" name="title" class="form-control" value="{{ $data->title }}">
                  </div>
                  <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Meta Title</label>
                              <input type="text" name="metaTitle" class="form-control" id="metaTitle" value="{{ $data->meta_title }}">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Meta Keywords</label>
                              <input type="text" name="metaKeywords" class="form-control" id="metaKeywords" value="{{ $data->meta_keywords }}">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Meta Description</label>
                              <textarea rows="2" class="form-control" id="metaDescription" name="metaDescription" value="{{ $data->meta_description }}" >{{ $data->meta_description }}</textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Slug</label>
                              <input type="text" name="slug" class="form-control" id="slug" value="{{ $data->slug }}">
                               @if ($errors->has('slug'))
                              <span class="error">
                              <strong>{{ $errors->first('slug') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>

                  <div class="col-sm-6 mt-2">
                     <label>Banner Image</label>
                     <input type="file" name="banner" class="form-control">
                     @if($data->banner)
                     <img src="{{ asset('uploads/tour/banner/'.$data->banner) }}" width="150" class="mt-2">
                     @endif
                  </div>

                  <div class="col-sm-6 mt-2">
                     <label>Total Days</label>
                     <input type="text" name="day" class="form-control" value="{{ $data->day }}">
                  </div>

                  <div class="col-sm-6 mt-2">
                     <label>Total Nights</label>
                     <input type="text" name="night" class="form-control" value="{{ $data->night }}">
                  </div>

                  <div class="col-sm-6 mt-2">
                     <label>Price</label>
                     <input type="text" name="price" class="form-control" value="{{ $data->price }}">
                  </div>

                  <div class="col-sm-6 mt-2">
                     <label>Image</label>
                     <input type="file" name="image" class="form-control">
                     @if($data->image)
                     <img src="{{ asset('uploads/tour/image/'.$data->image) }}" width="150" class="mt-2">
                     @endif
                  </div>

                  <div class="col-sm-12 mt-2">
                     <label>Description</label>
                     <textarea name="content" id="content" rows="5" class="form-control" value="{{$data->content}}">{!! $data->content !!}</textarea>
                  </div>

                   <div class="col-sm-12 mt-2">
                     <label>Highlight <span style="color:red; font-size:12px">Note: please add highlight with using ; (highlight 1; highlight 2; etc...)</span></label>
                     <textarea name="highlights" id="highlights" rows="5" class="form-control" value="{{$data->highlights}}">{!! $data->highlights !!}</textarea>
                  </div>

                  {{-- Day-wise Content --}}
                  <div class="col-sm-12 add-more-day">
                     <div id="point-div" class="w-100">
                        <label class="mt-3 d-block">Itinerary (Days)</label>
                        <div class="form-group mt-2" id="day-div">
                           @foreach ($data->daychart as $index => $day)
                           <div class="added-image {{ $index != 0 ? 'position-relative' : '' }}" style="border: 1px solid #ccc; padding: 15px; margin-bottom: 10px;">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <label>Day Title</label>
                                    <input type="text" name="day_head[]" class="form-control" value="{{ $day->day_head }}">
                                 </div>
                                 <div class="col-sm-6">
                                    <label>Day Image</label>
                                    <select name="dayWiseimage[]" class="form-control">
                                                <option value="">Select City Image</option>
                                                @foreach ($cityImages as $option)
                                                   <option value="{{ $option['value'] }}" 
                                                   {{ $day->day_img == $option['value'] ? 'selected' : '' }}>
                                                   {{ $option['label'] }}-{{ $option['value'] }}</option>
                                                @endforeach
                                             </select>
                                    @if($day->day_img)
                                    <img src="{{ asset('uploads/tour/image/'.$day->day_img) }}" width="120" class="mt-2">
                                    @endif
                                 </div>
                              </div>
                              <textarea rows="5" name="day_content[]" class="form-control mt-2">{{ $day->day_content }}</textarea>
                               @if($index != 0)
                                 <button type="button" class="removeRadio fa fa-minus-circle fa-2x" 
                                 style="position: absolute; top: 5px; right: 10px; border: none; background: transparent; color: #dc3545;"></button>
                              @endif 
                           </div>
                           @endforeach
                        </div>

                        <label class="mt-3 d-block">Status</label>
                        <label>
                           <input type="radio" class="status" value="Active" name="status" {{ $data->status == 'Active' ? 'checked' : '' }}> Active
                        </label>
                        <label>
                           <input type="radio" class="status" value="InActive" name="status" {{ $data->status == 'InActive' ? 'checked' : '' }}> Inactive
                        </label>

                        <div class="form-group mt-3">
                           <button id="submit" type="submit" class="btn btn-primary">Update Tour</button>
                        </div>
                     </div>

                     <div>
                        <button class="btn add-more-btn" type="button" onclick="add()"><i class="fa fa-plus-circle"></i> Add More</button>
                     </div>
                  </div>
               </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
</section>

@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<!-- <script>
   CKEDITOR.replace('content');
</script> -->

<script>
function add() {
   var div = $("<div />");
   div.html(GetDynamicDayHtml());
   $("#day-div").append(div);
}

function GetDynamicDayHtml() {
   return `
   <div class="added-image position-relative" style="border:1px solid #ccc; padding:15px; margin-bottom:15px;">
      <div class="row">
         <div class="col-sm-6">
            <label>Day Title</label>
            <input type="text" name="day_head[]" class="form-control"><br>
         </div>
         <div class="col-sm-6">
            <label>Day Image</label>
            <select name="dayWiseimage[]" class="form-control">
                                                <option value="">Select City Image</option>
                                                @foreach ($cityImages as $option)
                                                   <option value="{{ $option['value'] }}">{{ $option['label'] }}-{{ $option['value'] }}</option>
                                                @endforeach
                                             </select>
         </div>
      </div>
      <textarea rows="5" name="day_content[]" class="form-control mt-2" style="padding-right: 50px;"></textarea>
      <button type="button" class="removeRadio fa fa-minus-circle fa-2x" 
         style="position: absolute; top: 5px; right: 10px; border: none; background: transparent; color: #dc3545;"></button>
   </div>`;
}

$("body").on("click", ".removeRadio", function () {
   $(this).closest(".added-image").remove();
});
</script>

<script>
   $(function () {
      $('.selectpicker').selectpicker();
   });
</script>
@endsection
