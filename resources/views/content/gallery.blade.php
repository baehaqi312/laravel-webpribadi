@extends('layouts.app')

@section('content')
    <!-- ***** Portfolio Area Start ***** -->
    <section id="portfolio" class="portfolio-area cuaks overflow-hidden">
        <div id="breadcrumbs" class="breadcrumbs shadow pb-3">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Gallery</li>
                </ol>
                <h2>Gallery Kampus</h2>
            </div>
        </div>
        <div class="container mt-4 mb-5">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <!-- Portfolio Menu -->
                    <div class="portfolio-menu btn-group btn-group-toggle flex-wrap justify-content-center text-center mb-4 mb-md-5"
                        data-toggle="buttons">
                        <label class="btn active d-table text-uppercase p-2">
                            <input type="radio" value="all" checked class="portfolio-btn">
                            <span>All</span>
                        </label>
                        <label class="btn d-table text-uppercase p-2">
                            <input type="radio" value="cowo" class="portfolio-btn">
                            <span>Laki - Laki</span>
                        </label>
                        <label class="btn d-table text-uppercase p-2">
                            <input type="radio" value="cewe" class="portfolio-btn">
                            <span>Perempuan</span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- Portfolio Items -->
            <div class="row items portfolio-items">
                @foreach ($gallery as $galleri)
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item"
                        data-groups='["{{ $galleri->type }}","development"]'>
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="#">
                                <img src="assets/images/gallery/{{ $galleri->gambar }}.jpg" alt="">
                            </a>
                            <!-- Case Studies Overlay -->
                            <a href="assets/images/gallery/{{ $galleri->gambar }}.jpg" data-fancybox="images"
                                class="case-studies-overlay">
                                <!-- Overlay Text -->
                                <span class="overlay-text text-center p-3">
                                    <i class="fas fa-search-plus fa-2x text-white"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->
@endsection
