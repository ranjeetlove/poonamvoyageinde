@extends('frontend.layout.app')
@section('content')
      <div class="page-title-area ptb2-100">
         <div class="container">
            <div class="page-title-content">
               <h1>Blog Details</h1>
               <ul>
                  <li class="item"><a href="index.html">Home</a></li>
                  <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Blog Details</a></li>
               </ul>
            </div>
         </div>
		 
         <div class="bg-image">
            <img src="{{asset('uploads/banners/'.$banner->image)}}" alt="Demo Image">
         </div>
      </div>
	  
	  
	  

           <section class="blog-details-section pt-100 pb-70">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 col-md-12">
                  <div class="blog-details-desc mb-30">
                     <div class="image mb-20">
                        <img src="{{asset('/uploads/blog/'.$blog->image)}}" alt="image" />
                     </div>
                     <ul class="info-list mb-20">
                        <li><i class='bx bx-calendar'></i> {{$blog->posted_date}}</li>
                        <li><i class='bx bx-tag'></i>{{$blog->category}}</li>
                     </ul>
                     <div class="content mb-20">
                        <h3>{{$blog->title}}</h3>
                        <p>{!!$blog->content!!}</p>						
                     </div>
                  </div>
               </div>
               
               
               <div class="col-lg-4 col-md-12">
                  <aside class="widget-area">
                     <div class="widget widget-article mb-30">
                        <h3 class="sub-title">Recent Blog</h3>
                        @foreach ($blogs as $blog)
                        <article class="article-item">
                           <div class="image">
                              <img src="{{asset('uploads/blog/'.$blog->image)}}" alt="Demo Image" />
                           </div>
                           <div class="content">
                              <h3>
                                 <a href="{{route('blogdetails',$blog->slug) }}">{{$blog->title}}</a>
                              </h3>
                              <ul class="list">
                                 <li>
                                    <div class="author">
                                       <img src="{{asset('frontend/assets/img/blog/author1.jpg')}}" alt="Demo Image">
                                       <span>By - {{$blog->posted_by}}</span>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </article>
                        @endforeach
                        					
						{{-- <article class="article-item">
                           <div class="image">
                              <img src="assets/img/blogs/blog3.jpg" alt="Demo Image" />
                           </div>
                           <div class="content">
                              <h3>
                                 <a href="blog-details.html">Blog Title 3</a>
                              </h3>
                              <ul class="list">
                                 <li>
                                    <div class="author">
                                       <img src="assets/img/blog/author1.jpg" alt="Demo Image">
                                       <span>By - Admin</span>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </article>
						
					  <article class="article-item">
                           <div class="image">
                              <img src="assets/img/blogs/blog4.jpg" alt="Demo Image" />
                           </div>
                           <div class="content">
                              <h3>
                                 <a href="blog-details.html">Blog Title 4</a>
                              </h3>
                              <ul class="list">
                                 <li>
                                    <div class="author">
                                       <img src="assets/img/blog/author1.jpg" alt="Demo Image">
                                       <span>By - Admin</span>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </article> --}}
           
          
                     </div>
            
                  </aside>
               </div>
            </div>
         </div>
      </section>


@endsection
