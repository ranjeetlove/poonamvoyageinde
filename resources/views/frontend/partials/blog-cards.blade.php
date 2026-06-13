@foreach ($blogs as $blog)
    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="item-single mb-30">
            <div class="image">
                <img src="{{ asset('uploads/blog/'.$blog->image) }}" alt="{{ $blog->title }}">
            </div>
            <div class="content">
                <ul class="info-list">
                    <li><i class='bx bx-calendar'></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}</li>
                    <li><i class='bx bx-tag'></i>{{ $blog->category }}</li>
                </ul>
                <h3>
                    <a href="{{ route('blogdetails', $blog->slug) }}">{{ $blog->title }}</a>
                </h3>
                <p>
                    {!! Str::limit(html_entity_decode(strip_tags($blog->content)), 90) !!}
                </p>
                <ul class="list">
                    <li>
                        <div class="author">
                            <img src="{{ asset('frontend/assets/img/blog/author1.jpg') }}" alt="Demo Image">
                            <span>By - {{ implode(' ', array_slice(explode(' ', $blog->posted_by), 0, 2)) }}</span>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('blogdetails', $blog->slug) }}" class="btn-primary">Lire Plus</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endforeach
