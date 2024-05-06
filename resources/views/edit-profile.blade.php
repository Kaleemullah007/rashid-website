@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="{{ route('home') }}" class="btn btn-primary">

                            Home
                        </a> Update Profile</div>

                    <div class="card-body">
                        <div class="getIn__touch-left-form">
                            <form action="{{ route('profile.update', $profile->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="fas fa-user"></span>
                                            <input type="text" name="name" placeholder="Full Name" required="required"
                                                value="{{ old('name', $profile->name) }}">
                                            @error('name')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 md-mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-envelope-open"></span>
                                            <input type="email" name="email" placeholder="Email Address"
                                                required="required" value="{{ old('email', $profile->email) }}">
                                            @error('email')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 md-mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-eye"></span>
                                            <input type="password" name="password" placeholder="Password"
                                                value="{{ old('password') }}">
                                            @error('password')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 md-mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-eye"></span>
                                            <input type="password" name="password_confirmation"
                                                placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
                                            @error('password_confirmation')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="contact__two-right-form-item">
                                            <button class="btn-one" type="submit" name="submit" value="Submit">Update
                                                Profile <i class="far fa-chevron-double-right"></i></button>
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
@endsection
