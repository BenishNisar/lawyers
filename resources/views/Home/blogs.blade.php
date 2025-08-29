@extends("Layout.layout")
@section("Content")

<style>
    /* Custom CSS for Blog Cards */
    :root {
        --main-color: #283054;
        --secondary-color: #8b0000;
        --card-bg-color: #ffffff;
        --card-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        --card-hover-bg: #f9f9f9;
        --btn-hover-color: #d14747;
        --card-border-radius: 12px;
        --card-hover-shadow: 0 16px 40px rgba(0, 0, 0, 0.2);
        --image-height: 200px;
        --padding: 20px;
    }

    /* Blog Card Container */
    .blog-card-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-bottom: 30px;
        margin-top: 10px;
    }

    /* Blog Card Styling */
    .blog-card {
        background: var(--card-bg-color);
        box-shadow: var(--card-shadow);
        border-radius: var(--card-border-radius);
        overflow: hidden;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
        margin-bottom: 20px; /* Added margin for spacing between cards */

    }

    .blog-card:hover {
        background-color: var(--card-hover-bg);
        box-shadow: var(--card-hover-shadow);
        transform: translateY(-5px);
    }

    /* Blog Card Image */
    .blog-card-img {
        width: 100%;
        height: var(--image-height);
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .blog-card-img:hover {
        transform: scale(1.05);
    }

    /* Blog Card Body */
    .blog-card-body {
        padding: var(--padding);
    }

    /* Blog Card Header */
    .blog-card-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .blog-card-date {
        background-color: var(--secondary-color);
        color: white;
        padding: 4px 8px;
        font-size: 14px;
        border-radius: 4px;
    }

    /* Blog Card Title */
    .blog-card-title {
        font-size: 18px;
        font-weight: 600;
        color: var(--main-color);
        margin-top: 10px;
        transition: color 0.3s ease;
    }

    .blog-card-title:hover {
        color: var(--secondary-color);
        text-decoration: underline;
    }

    /* Blog Card Text */
    .blog-card-text {
        color: var(--main-color);
        font-size: 14px;
        margin-top: 10px;
    }

    /* "Read More" Link */
    .blog-card-read-more {
        color: var(--secondary-color);
        font-weight: 500;
        margin-top: 15px;
        display: inline-block;
        transition: color 0.3s ease;
    }

    .blog-card-read-more:hover {
        color: var(--btn-hover-color);
    }

    /* Mobile Responsiveness */
    @media (max-width: 767px) {
        .blog-card-container {
            grid-template-columns: 1fr; /* Single column on small screens */
        }

        .blog-card-img {
            height: 180px;
        }

        .blog-card-title {
            font-size: 16px;
        }

        .blog-card-text {
            font-size: 12px;
        }

        .blog-card-read-more {
            font-size: 13px;
        }
    }
</style>
 <div>
                <h1 class="text-center">latest blogs</h1>
            </div>
<section class="blog-section pb-5">
    <div class="container">
        <div class="blog-card-container">

            <!-- Blog Card Loop -->
            @foreach($blogs as $blog)
            <div class="blog-card">
                <img src="{{ asset($blog->featured_image) }}" alt="Blog Image" class="blog-card-img">
                <div class="blog-card-body">
                    <div class="blog-card-header">
                        <span class="blog-card-date">{{ \Carbon\Carbon::parse($blog->date)->format('d M, Y') }}</span>
                        <small class="text-muted">By {{ $blog->author }}</small>
                    </div>
                    <h5 class="blog-card-title">
                        <a href="{{ route('Home.blogs_details', ['slug' => $blog->slug]) }}" class="blog-card-link">
                            {{ $blog->title }}
                        </a>
                    </h5>
                    <p class="blog-card-text">{{ Str::limit($blog->short_description, 100) }}</p>
                    <a href="{{ route('Home.blogs_details', ['slug' => $blog->slug]) }}" class="blog-card-read-more">Read More →</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
