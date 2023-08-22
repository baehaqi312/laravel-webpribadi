@extends('layouts.app')

@section('content')
    <section class="cuaks contact-area">
        <div id="breadcrumbs" class="breadcrumbs shadow pb-3">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Contact</li>
                </ol>
                <h2>Contact</h2>
            </div>
        </div>
        <div class="container mt-4">
            <h2 class="section__title mb-5">Contact Me</h2>
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-5">
                    <!-- Contact Us -->
                    <div class="contact-us">
                        <ul>
                            <!-- Contact Info -->
                            <li class="contact-info color-1 bg-hover active hover-bottom text-center p-5 m-3">
                                <span><i class="fas fa-mobile-alt fa-3x"></i></span>
                                <a class="d-block my-2" href="#">
                                    <h3>+62 838 1806 2960</h3>
                                </a>
                            </li>
                            <!-- Contact Info -->
                            <li class="contact-info color-3 bg-hover active hover-bottom text-center p-5 m-3">
                                <span><i class="fas fa-envelope-open-text fa-3x"></i></span>
                                <a class="d-none d-sm-block my-2" href="#">
                                    <h3>lutfibaehaqi1234 @gmail.com</h3>
                                </a>
                                <a class="d-block d-sm-none my-2" href="#">
                                    <h3>lutfibaehaqi1234 @gmail.com</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pt-4 pt-lg-0">
                    <!-- Contact Box -->
                    <div class="contact-box text-center">
                        <!-- Contact Form -->
                        <form id="contact-form" method="POST" action="assets/php/mail.php">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name"
                                            required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Company Name"
                                            required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Phone"
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-bordered active btn-block mt-3"><span
                                            class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Map Area Start ======-->
    <section class="section map-area">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d860.0392792166652!2d108.54966999919776!3d-6.880964545277679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1671551541875!5m2!1sid!2sid"
            width="100" height="100" style="border:0;" allowfullscreen=""></iframe>
    </section>
    <!--====== Map Area End ======-->
@endsection
