@extends('layouts.auth')


@section('content')
<h1>Bot Appointments</h1>
@if (count($botAppointments)>0)
@foreach ($botAppointments as $botAppointment)
<ul class="list-group">
    <li class="list-group-item">Name: {{$botAppointment->name}}</li>
    <li class="list-group-item">Email: {{$botAppointment->email}}</li>

    <li class="list-group-item">Contact : {{$botAppointment->phone}}</li>
    <li class="list-group-item">Type: {{$botAppointment->type}}</li>
    <li class="list-group-item">Date: {{$botAppointment->date}}</li>
    <li class="list-group-item">Time: {{$botAppointment->time}}</li>
    <li class="list-group-item">
        <form method="POST" action="/botAppointment/{{ $botAppointment->id }}" class="d-inline-block"
            onsubmit="return confirm('Are you sure?')">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-danger">
                remove
            </button>
        </form>
    </li>

</ul>
@endforeach

@endif
@endsection
