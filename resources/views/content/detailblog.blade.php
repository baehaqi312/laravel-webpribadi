@extends('layouts.app')

@section('content')
    <!-- ***** Blog Area Start ***** -->
    <section class="cuaks">
        <div id="breadcrumbs" class="breadcrumbs shadow pb-3">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li>Detail Blog</li>
                </ol>
                <h2>Detail Blog > {{ $blog->title }}</h2>
            </div>
        </div>
        <div class="container">
            <div class="mt-4">
                <!-- Single Blog Details -->
                <article class="single-blog-details mt-4">
                    <!-- Blog Thumb -->
                    <div class="blog-thumb">
                        <a href="#"><img src="{{ asset('assets/images/blog/' . $blog->gambar) }}.jpg"
                                alt=""></a>
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content digimax-blog p-3">
                        <!-- Meta Info -->
                        <div class="meta-info d-flex flex-wrap align-items-center py-2">
                            <ul>
                                <li class="d-inline-block p-2">By <a href="#">{{ $blog->nama }}</a></li>
                                <li class="d-none d-md-inline-block p-2"><a href="#">{{ $blog->created_at }}</a>
                                </li>
                                <li class="d-inline-block p-2"><a href="#">0 Comments</a></li>
                            </ul>
                            <!-- Blog Share -->
                            <div class="blog-share ml-auto d-none d-sm-block">
                                <!-- Social Icons -->
                                <div class="social-icons d-flex justify-content-center">
                                    <a class="bg-white facebook" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="bg-white twitter" href="#">
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="bg-white google-plus" href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Details -->
                        <div class="blog-details">
                            <h3 class="blog-title py-3"><a href="#">{{ $blog->title }}</a></h3>
                            <p class="d-none d-sm-block">{{ $blog->body }}</p>
                            <p class="d-block d-sm-none">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even slightly believable. If you are going to use a
                                passage.</p>
                            <blockquote class="blockquote px-4 py-3 my-3 ml-4">
                                <p class="font-italic d-none d-sm-block">Contrary to popular belief, Lorem Ipsum is not
                                    simply random text. It has roots in a piece of classical Latin literature from 45
                                    BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                                    consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                                    classical literature.</p>
                                <p class="font-italic d-block d-sm-none">Contrary to popular belief, Lorem Ipsum is not
                                    simply random text. It has roots in a piece of classical Latin literature from 45
                                    BC, making it over 2000 years old.</p>
                            </blockquote>
                            <p class="d-none d-sm-block">The standard chunk of Lorem Ipsum used since the 1500s is
                                reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus
                                Bonorum et Malorum" by Cicero are also reproduced in their exact original form,
                                accompanied by English versions from the 1914 translation by H. Rackham.</p>
                            <p class="d-block d-sm-none">The standard chunk of Lorem Ipsum used since the 1500s is
                                reproduced below for those interested. Sections 1.10.32 and 1.10.33.</p>
                        </div>
                    </div>
                    <div class=" p-3 mt-5">
                        <!-- Contact Title -->
                        <h3 class="comments-title text-uppercase text-left text-lg-right mb-3">Post your Comments</h3>
                        <!-- Comment Box -->
                        <div class="contact-box comment-box">
                            <form method="POST" action="#">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-bordered" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
            </div>
        </div>

    </section>
    <!-- ***** Blog Area End ***** -->

    @include('content.contacts')
@endsection
