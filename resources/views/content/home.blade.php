@extends('layouts.app')

@section('content')
    @foreach ($about as $home)
        <div id="particles-js" class="position-relative">
            <!-- ***** Welcome Area Start ***** -->
            <div id="home" class="position-absolute">
                <section>
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Welcome Intro Start -->
                            <div class="col-12 col-md-5">
                                <!-- Welcome Thumb -->
                                <div class="welcome-thumb-wrapper mx-auto d-block">
                                    <span>
                                        <img src="assets/images/luthfi.jpg" alt="luthfi"
                                            class="rounded rounded-circle shadow-lg">
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="welcome-intro hero-home">
                                    <h1><span>{{ $home->nama }}</span><br>Web Developper</h1>
                                    <p class="my-4">Hello, My Name is Luthfi Baehaqi, A Junior Website Developper, Well I
                                        like
                                        to Create
                                        Beatifull Website, And Also I Like
                                        to Do Logic Think of a Website App.</p>

                                    <!-- Buttons -->
                                    <div class="about__buttons">
                                        <a download="" href="#" class="button button--flex text-light">
                                            Start a project
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- ***** Welcome Area End ***** -->
        </div>

        <!-- ==================== ABOUT ==================== -->
        <section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My indroduction</span>

            <div class="about__container containerrr grid">
                <img src="assets/images/about.jpg" alt="" class="about__img">
                <div class="about__data">
                    <p class="about__description">{{ $home->title }}</p>
                    <div class="about__info">
                        <div>
                            <span class="about__info-title">{{ $home->umur }}+</span>
                            <span class="about__info-name">Years age</span>
                        </div>
                        <div>
                            <span class="about__info-title">{{ $home->project }}+</span>
                            <span class="about__info-name">Project</span>
                        </div>
                        <div>
                            <span class="about__info-title">{{ $home->ig }}+</span>
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
    @endforeach
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


    @include('content.contacts')
@endsection
