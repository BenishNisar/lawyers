@extends("Layout.layout")
@section("Content")


<section class="pb-5 responsive-blog">
    <div class="container">

        <div class="row g-4">
            <div class="text-center">
                <h1 class="fw-bold mainhead">
                    <strong>Latest Blogs & Success Stories</strong>
                    </h1>
                <p class="text-muted section-subtitle">Discover insights, legal tips, and success stories from our experts</p>
            </div>

            <!-- Blog Card 1 -->
            @foreach($blogs as $blog)
<div class="col-md-4">
    <div class="card h-100 shadow-sm border-0 rounded-3 blog-card">
        <img src="{{ asset($blog->featured_image) }}" class="card-img-top" alt="Blog Image">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-2">
                <span class="badge bg-danger">{{ \Carbon\Carbon::parse($blog->date)->format('d M, Y') }}</span>
                <small class="text-muted">By {{ $blog->author }}</small>
            </div>
            {{-- <h5 class="card-title fw-bold" style="color: #283054;">{{ $blog->title }}</h5> --}}
            <h5 class="card-title fw-bold" style="color: #283054;">
                <a href="{{ route('Home.blogs_details', ['slug' => $blog->slug]) }}" class="text-decoration-none" style="color: #283054;">
                    {{ $blog->title }}
                </a>
            </h5>

            <p class="card-text text-muted">{{ Str::limit($blog->short_description, 100) }}</p>
            <a href="{{ route('Home.blogs_details', ['slug' => $blog->slug]) }}" class="text-decoration-none" style="color: #8b0000;">Read More →</a>

        </div>
    </div>
</div>
@endforeach




        </div>
    </div>
</section>

@endsection
