@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>

                <div class="card-body">
                    @isset($url)
                    <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                        @else
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @endisset
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                        value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="matric"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Matric No') }}</label>

                                <div class="col-md-6">
                                    <input id="matric" type="text"
                                        class="form-control{{ $errors->has('matric') ? ' is-invalid' : '' }}"
                                        name="matric" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('matric'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('matric') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="faculty"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Faculty') }}</label>

                                <div class="col-md-6">
                                    <input id="faculty" type="text"
                                        class="form-control{{ $errors->has('faculty') ? ' is-invalid' : '' }}"
                                        name="faculty" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('faculty'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('faculty') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="department"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                                <div class="col-md-6">
                                    <input id="department" type="text"
                                        class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}"
                                        name="department" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('department'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                                <div class="col-md-6">
                                    <input id="year" type="text"
                                        class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" name="year"
                                        value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="nationality"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>

                                <div class="col-md-6">
                                    <input id="nationality" type="text"
                                        class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}"
                                        name="nationality" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('nationality'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="contact"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Contact No') }}</label>

                                <div class="col-md-6">
                                    <input id="contact" type="text"
                                        class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}"
                                        name="contact" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>













                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
