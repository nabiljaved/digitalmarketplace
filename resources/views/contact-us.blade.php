<?php $page = 'contact-us'; ?>
@extends('layout.mainlayout')
@section('content')
@component('components.backgroundimage')
@endcomponent
    @component('components.breadcrumb')
        @slot('title')
            Contact Us
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            Contact Us
        @endslot
    @endcomponent

  
    <div class="content">

        <div class="container">

            <!-- Contact Details -->
            <div class="contact-details">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="contact-info flex-fill">
                            <span><i class="feather-phone"></i></span>
                            <div class="contact-data">
                                <h4>Phone Number</h4>
                                <p>(971) 55 101 6476</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="contact-info flex-fill">
                            <span><i class="feather-mail"></i></span>
                            <div class="contact-data">
                                <h4>Email Address</h4>
                                <p><a href="mailto:truelysell@example.com">info@digitalmarket.ae</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="contact-info flex-fill">
                            <span><i class="feather-map-pin"></i></span>
                            <div class="contact-data">
                                <h4>Address</h4>
                                <p>Visit - Al Mamzar Centre, Office no. 2, Abu Hail, Dubai, United Arab Emirates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Contact Details -->

            <!-- Get In Touch -->
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-img">
                        <img src="{{ URL::asset('/assets/company/digitalmarket.png') }}" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-md-6">
                @if(session('success'))
                    <div id="flash-message" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div id="flash-message" class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                    <div class="contact-queries">
                        <h2>Get In Touch</h2>
                        <form action="{{ route('contact-us') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Name</label>
                                        <input class="form-control" type="text" placeholder="Enter Name*" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email</label>
                                        <input class="form-control" type="email" placeholder="Enter Email Address*" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Phone Number</label>
                                        <input class="form-control" type="text" placeholder="Enter Phone Number" name="phoneno">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Message</label>
                                        <textarea class="form-control" rows="4" placeholder="Type Message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit">Send Message<i
                                            class="feather-arrow-right-circle ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- /Get In Touch -->

        </div>
    </div>

    <!-- Map -->
    <div class="map-grid">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.720447201785!2d55.35109507491926!3d25.27998782834328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5dbd4d43ef29%3A0x3a40a28f1e59ccf7!2sOracle%20Digital%20%7CSocial%20Media%20marketing%20and%20Digital%20Marketing%20Dubai%20%7C%20Website%20Development%7C%20Social%20Media%20%7C%20E-Commerce%20Website!5e0!3m2!1sen!2sae!4v1690791985842!5m2!1sen!2sae"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            class="contact-map"></iframe>
    </div>
    <!-- /Map -->


    <script>
        setTimeout(function () {
            var flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                flashMessage.style.display = 'none';
            }
        }, 5000); // Change '5000' to the duration you want (in milliseconds)

    </script>

@endsection
