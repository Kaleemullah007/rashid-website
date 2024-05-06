@extends('layouts.home')
@section('content')
    <!-- Preloader Start -->

    <div class="contact__three pb-0 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 lg-mb-30">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="images/call.png" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Tell With US</h4>


                            <p><a href="tel:{{ config('details.phone') }}"> {{ config('details.phone') }}</a></p>
                            {{-- <p><a href="tel:+971 55 757 1009">+971 55 757 1009</a></p>
                            <p><a href="tel:+971 58 672 4436">+971 58 672 4436</a></p> --}}

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 md-mb-30">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="images/email.png" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Quick Email</h4>
                            <p><a href="mailto:{{ config('details.email') }}">{{ config('details.email') }}</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="images/locations.png" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Office Location</h4>
                            <p>{{ config('details.office_address') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact__three section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 lg-mb-30">
                    <div class="contact__three-left mr-40 xl-mr-0">
                        <div class="contact__three-left-map">
                            <iframe src="{{ config('details.google_map') }}" style="border:0;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact__three-righ">
                        <div class="contact__three-right-title">
                            <span class="subtitle-one">Request a call Back</span>
                            <h2 class="mb-30">Contact Us</h2>
                            @if (Session::has('message'))
                                <p class="alert alert-info">{{ Session::get('message') }}</p>
                            @endif
                        </div>
                        <div class="contact__three-right-form" id="contact">
                            <form action="{{ route('contact-save-message') }}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="fas fa-user"></span>
                                            <input type="text" name="name" placeholder="Full Name" required="required"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 md-mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-envelope-open"></span>
                                            <input type="email" name="email" placeholder="Email Address"
                                                required="required" value="{{ old('email') }}">
                                            @error('email')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="fas fa-book"></span>
                                            <input type="text" name="subject" placeholder="Subject"
                                                value="{{ old('subject') }}">
                                            @error('subject')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-comments"></span>
                                            <textarea name="message" placeholder="Message">{{ old('message') }}</textarea>
                                            @error('message')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact__two-right-form-item">
                                            <button class="btn-one" type="submit" name="submit" value="Submit">Submit
                                                Message <i class="far fa-chevron-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Solutions Area End -->

    <!-- Testimonial Area End -->
@endsection
