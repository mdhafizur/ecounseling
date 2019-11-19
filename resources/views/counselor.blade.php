@extends('layouts.auth')

@section('content')
<h3 style="text-align: center;">Welcome {{ Auth::user()->name }} </h3>

<a href="{{route('counselor.profile')}}">My Profile</a>
<a href="/appointedStudents">Appointments</a>
@endsection
