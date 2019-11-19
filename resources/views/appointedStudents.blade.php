@extends('layouts.auth')

@section('content')

<ul class="list-group">
    @forelse ($appointments as $appointment)
    <li class="list-group-item">
        Name: {{ $appointment->student->name }}
    </li>
    <li class="list-group-item">
        Email: {{ $appointment->student->email }}
    </li>
    <li class="list-group-item">
        Counselor Type: {{ $appointment->student->matric }}
    </li>
    <li class="list-group-item">
        Date/Time: {{ optional($appointment->date)->format('Y-m-d H:i:s') }}
    </li>
    <li class="list-group-item">
        <form method="POST" action="/appointments/{{ $appointment->id }}" class="d-inline-block"
            onsubmit="return confirm('Are you sure?')">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-danger">
                remove
            </button>
        </form>
    </li>
    @empty
    <li class="list-group-item">
        <em class="text-muted">No appointments</em>
    </li>
    @endforelse
</ul>
@endsection
