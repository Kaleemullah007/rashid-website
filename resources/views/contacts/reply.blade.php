@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="{{ route('home') }}" class="btn btn-primary">

                            Home
                        </a> {{ __('Reply') }} </div>

                    <div class="card-body">
                        <div class="getIn__touch-left-form">
                            <form action="{{ route('contacts.update', $contact->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="fas fa-user"></span>
                                            <input type="text" name="name" placeholder="Full Name" required="required"
                                                value="{{ old('name', $contact->name) }}" readonly>
                                            @error('name')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 md-mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-envelope-open"></span>
                                            <input type="email" name="email" placeholder="Email Address"
                                                required="required" value="{{ old('email', $contact->email) }}" readonly>
                                            @error('email')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item" readonly>
                                            <span class="fas fa-book"></span>
                                            <input type="text" name="subject" placeholder="Subject"
                                                value="{{ old('subject', $contact->subject) }}">
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
                                            <button class="btn-one" type="submit" name="submit" value="Submit">Reply
                                                Message <i class="far fa-chevron-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            @include('contacts.replies');
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
