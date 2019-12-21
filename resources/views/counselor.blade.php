@extends('layouts.auth')

@section('content')
<h3 style="text-align: center;">Welcome {{ Auth::user()->name }} </h3>
<br>
<br>
<br>
<div style="text-align: center;">
    <button type=" button" onclick="location.href = '{{route('counselor.profile')}}';" class="btn btn-info">View &
        Update
        Profile</button>
    <button type=" button" onclick="location.href = '/appointedStudents';" class="btn btn-info">Appointed
        Students</button>
    <button type=" button" onclick="location.href = '/counselor/chat';" class="btn btn-info">Chat</button>

</div>
@endsection
