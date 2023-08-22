@extends('layouts.app')

@section('content')
    <!-- ***** Blog Area Start ***** -->
    <section class="blog blog-area cuaks">
        <div id="breadcrumbs" class="breadcrumbs shadow pb-3">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Blog</li>
                </ol>
                <h2>Blog</h2>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb mx-auto">
                                <a href="/blog/{{ $blog->id }}"><img src="assets/images/blog/{{ $blog->gambar }}.jpg"
                                        alt=""></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <!-- Meta Info -->
                                <ul class="meta-info d-flex justify-content-between">
                                    <li>By <a href="/about">{{ $blog->nama }}</a></li>
                                    <li><a href="/blog/{{ $blog->id }}">{{ $blog->created_at }}</a></li>
                                </ul>
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a>
                                </h3>
                                <p>{{ $blog->subtitle }}</p>
                                <a href="/blog/{{ $blog->id }}" class="blog-btn mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->
@endsection
