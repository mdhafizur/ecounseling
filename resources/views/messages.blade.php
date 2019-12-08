@extends('layouts.auth')


@section('content')
<h1>Messages</h1>
@if (count($messages)>0)
@foreach ($messages as $message)
<ul class="list-group">
    <li class="list-group-item">Name: {{$message->name}}</li>
    <li class="list-group-item">Email: {{$message->email}}</li>
    <li class="list-group-item">Message: {{$message->message}}</li>
</ul>
@endforeach
@else
<li class="list-group-item">
    <em class="text-muted">No Messages</em>
</li>
@endif
@endsection
