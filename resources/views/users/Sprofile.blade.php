@extends('layouts.auth')

@section('content')

<div class="container">
    @include('inc.profileUpdate')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">

                    <form method="POST" action="{{ route('student.profile.update') }}"
                        aria-label="{{ __('Edit Profile') }}" enctype="multipart/form-data">

                        @csrf
                        <div class="col-md-10 col-md-offset-1">
                            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px">
                            <h2>{{$user->name}}'s Profile</h2>
                            <!-- <form enctype="multipart/form-data" action="/counselor/profile" ></form> -->
                            <label> Update Profile Image</label>
                            <input id="avatar" type="file" name="avatar">


                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    value="{{ old('name', $user->name) }}" required autofocus>

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
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email', $user->email) }}" required>

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
                                    name="password">

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
                                    name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="matric"
                                class="col-md-4 col-form-label text-md-right">{{ __('Matric No') }}</label>

                            <div class="col-md-6">
                                <input id="matric" type="text"
                                    class="form-control{{ $errors->has('matric') ? ' is-invalid' : '' }}" name="matric"
                                    value="{{ old('matric', $user->matric) }}">

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
                                    name="faculty" value="{{ old('faculty', $user->faculty) }}">

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
                                    name="department" value="{{ old('department', $user->department) }}">

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
                                    value="{{ old('year', $user->year) }}">

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
                                    name="nationality" value="{{ old('nationality', $user->nationality) }}">

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
                                    name="contact" value="{{ old('contact', $user->contact) }}">

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
                                    {{ __('Update') }}
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
