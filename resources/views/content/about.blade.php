@extends('layouts.app')

@section('content')
    <!-- ==================== ABOUT ==================== -->
    <section class="about cuaks" id="about">
        <div id="breadcrumbs" class="breadcrumbs shadow pb-3">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>About</li>
                </ol>
                <h2>About </h2>
            </div>
        </div>
        @foreach ($about as $abouts)
            <div class="mt-5">
                <h2 class="section__title">About Me</h2>
                <span class="section__subtitle">My indroduction</span>
            </div>
            <div class="about__container containerrr grid">
                <img src="assets/images/about.jpg" alt="" class="about__img">
                <div class="about__data">
                    <p class="about__description">{{ $abouts->title }}</p>
                    <div class="about__info">
                        <div>
                            <span class="about__info-title">{{ $abouts->umur }}+</span>
                            <span class="about__info-name">Years age</span>
                        </div>
                        <div>
                            <span class="about__info-title">{{ $abouts->project }}+</span>
                            <span class="about__info-name">Project</span>
                        </div>
                        <div>
                            <span class="about__info-title">{{ $abouts->ig }}+</span>
                            <span class="about__info-name">Followers</span>
                        </div>
                    </div>

                    <div class="about__buttons">
                        <a download="" href="#" class="button button--flex">
                            Download CV<i class='bx bx-download button__icon'></i>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <!-- ==================== SKILLS ==================== -->
    <section class="skills section">
        <h2 class="section__title">Skills</h2>
        <span class="section__subtitle">My technical level</span>

        <div class="skills__container container grid">
            <div>
                <!-- ==================== SKILLS1 1 ==================== -->
                <div class="skills__content skills__open">
                    <div class="skills__header">
                        <i class='bx bx-download skills__icon'></i>

                        <div>
                            <h1 class="skills__title">Frontend developer</h1>
                            <span class="skills__subtitle">More then 4 years</span>
                        </div>

                        <i class='bx bx-chevron-down skills__arrow'></i>
                    </div>

                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">HTML</h3>
                                <span class="skills__number">90%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__html"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">CSS</h3>
                                <span class="skills__number">80%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__css"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">JavaScript</h3>
                                <span class="skills__number">60%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__js"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">Rect</h3>
                                <span class="skills__number">75%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__react"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ==================== SKILLS1 2 ==================== -->
                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class='bx bx-server skills__icon'></i>

                        <div>
                            <h1 class="skills__title">Backend developer</h1>
                            <span class="skills__subtitle">More then 4 years</span>
                        </div>

                        <i class='bx bx-chevron-down skills__arrow'></i>
                    </div>

                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">PHP</h3>
                                <span class="skills__number">80%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__php"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">Node Js</h3>
                                <span class="skills__number">70%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__node"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">Firebase</h3>
                                <span class="skills__number">90%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__firebase"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">Pyton</h3>
                                <span class="skills__number">55%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__pyton"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <!-- ==================== SKILLS1 3 ==================== -->
                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class='bx bx-camera skills__icon'></i>

                        <div>
                            <h1 class="skills__title">Designer</h1>
                            <span class="skills__subtitle">More then 5 years</span>
                        </div>

                        <i class='bx bx-chevron-down skills__arrow'></i>
                    </div>

                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">Figma</h3>
                                <span class="skills__number">90%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__figma"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">Corel</h3>
                                <span class="skills__number">90%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__corel"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__title">
                                <h3 class="skills__name">Photoshop</h3>
                                <span class="skills__number">85%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__photoshop"></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <!-- ==================== QUALIFIKASI ==================== -->
    <section class="qualification section">
        <h2 class="section__title">Qualification</h2>
        <span class="section__subtitle">My Peronal journey</span>

        <div class="qualification__container container">
            <div class="qualification__tabs">
                <div class="qualification__buton button--flex qualification__active" data-target='#education'>
                    <i class='bx bxs-graduation qualification__icon'></i>Education
                </div>
                <div class="qualification__buton button--flex" data-target='#work'>
                    <i class='bx bx-briefcase qualification__icon'></i>work
                </div>
            </div>

            <div class="qualification__section">
                <!-- ==================== QUALIFIKASI CN 1 ==================== -->
                <div class="qualification__content qualification__active" data-content id="education">
                    <!-- ==================== QUALIFIKASI 1 ==================== -->
                    @foreach ($educaion as $skull)
                        <div class="qualification__data mb-3">
                            <div>
                                <h3 class="qualification__title">{{ $skull->sekolah }}</h3>
                                <span class="qualification__subtitle">{{ $skull->namasekolah }}<span>
                                        <div class="qualification__calender mt-2">
                                            <i class='bx bx-calendar'></i>{{ $skull->tahun }}
                                        </div>
                            </div>
                            <div>
                                <span class="qualification__rounded mt-3"></span>
                                {{-- <span class="qualification__line"></span> --}}
                            </div>
                        </div>
                    @endforeach

                    {{-- <!-- ==================== QUALIFIKASI 2 ==================== -->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounded"></span>
                                <span class="qualification__line"></span>
                            </div>
                            <div>
                                <h3 class="qualification__title">Sekolah Menengah Pertama</h3>
                                <span class="qualification__subtitle">{{ $abouts->smp }}</span>
                                <div class="qualification__calender">
                                    <i class='bx bx-calendar'></i> 2014 - 2017
                                </div>
                            </div>
                        </div>
                        <!-- ==================== QUALIFIKASI 3 ==================== -->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Sekolah Dasar</h3>
                                <span class="qualification__subtitle">{{ $abouts->sd }}</span>
                                <div class="qualification__calender">
                                    <i class='bx bx-calendar'></i> 2008 - 2014
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounded"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>
                        </div> --}}

                </div>
                <!-- ==================== QUALIFIKASI CN 2 ==================== -->
                <div class="qualification__content" data-content id="work">
                    <!-- ==================== QUALIFIKASI 1 ==================== -->
                    @foreach ($kerja as $item)
                        <div class="qualification__data mb-3">
                            <div></div>
                            <div>
                                <span class="qualification__rounded mt-3"></span>
                                {{-- <span class="qualification__line"></span> --}}
                            </div>
                            <div>
                                <h3 class="qualification__title">{{ $item->kerja }}</h3>
                                <span class="qualification__subtitle">{{ $item->namakerja }}<span>
                                        <div class="qualification__calender mt-2">
                                            <i class='bx bx-calendar'></i>{{ $item->tahunkerja }}
                                        </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <!-- ==================== QUALIFIKASI 2 ==================== -->
                    <div class="qualification__data">
                        <div></div>
                        <div>
                            <span class="qualification__rounded"></span>
                            <!-- <span class="qualification__line"></span> -->
                        </div>
                        <div>
                            <h3 class="qualification__title">Prakerin Kerja Lapang</h3>
                            <span class="qualification__subtitle">PT Inti Persero Bandung</span>
                            <div class="qualification__calender">
                                <i class='bx bx-calendar'></i> 2019
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    @include('content.contacts')
@endsection
