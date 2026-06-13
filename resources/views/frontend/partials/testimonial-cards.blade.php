@foreach ($testimonials as $testimonial)
    <div class="col-lg-3 col-md-6">
       <div class="item-single mb-30 comment-img-fix">
          <div class="image">
             <img src="{{asset('uploads/testimonials/'.$testimonial->image) }}" alt="Demo Image" >
          </div>
          <div class="content">
             <div class="title">
                <h3>
                   <a href="{{route('commentsdetails',$testimonial->slug)}}">{{ \Str::limit($testimonial->comment_head, 55) }}</a>
                </h3>
                {!! Str::limit(
                      html_entity_decode(strip_tags($testimonial->comment_content)),
                      55
                   ) !!}
                </br></br>
                <button onclick="location.href = '{{route('commentsdetails',$testimonial->slug)}}';" type="button" class="btn btn-sm btn-danger">Lire Plus</button>
             </div>

          </div>
       </div>
    </div>
@endforeach
