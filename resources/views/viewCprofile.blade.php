@extends('layouts.app')

@section('content')
@if (count($viewCprofile)>0)
@foreach ($viewCprofile as $cprofile)
<ul class="list-group">
    <div class="col-md-10 col-md-offset-1">
        <img src="/uploads/avatars/{{ $cprofile->avatar }}"
            style="width:150px; height:150px; float:left;border-radius: 50%;margin-right: 25px;">
        <h2>{{$cprofile->name}}'s Profile</h2>



    </div>
    <li class="list-group-item">Name: {{$cprofile->name}}</li>
    <li class="list-group-item">Email: {{$cprofile->email}}</li>
    <li class="list-group-item">Counselor Type: {{$cprofile->type}}</li>
    <li class="list-group-item">Contact No: {{$cprofile->contact}}</li>
    <li class="list-group-item">About: {{$cprofile->about}}</li>


</ul>
@endforeach

@endif
@endsection
