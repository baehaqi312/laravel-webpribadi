@extends('layouts.app')

@section('content')
    <!-- ***** Portfolio Area Start ***** -->
    <section id="portfolio" class="portfolio-area cuaks overflow-hidden">
        <div id="breadcrumbs" class="breadcrumbs shadow pb-3">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Portfolio</li>
                </ol>
                <h2>Portfolio</h2>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                @foreach ($portofolio as $port)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="/">
                                <img src="assets/images/portfolio/{{ $port->gambar }}.png" alt="">
                            </a>
                            <!-- Case Studies Overlay -->
                            <a href="/" class="case-studies-overlay">
                                <!-- Overlay Text -->
                                <span class="overlay-text text-center p-3">
                                    <h3 class="text-white mb-3">{{ $port->judul }}</h3>
                                    <p class="text-white">{{ $port->title }}</p>
                                </span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
