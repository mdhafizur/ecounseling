@extends('layouts.auth')
@section('content')
<div class="col-md-4">
    <h1>Records</h1>
    @foreach($records as $record)
    <li class="list-group-item">
        Counselor Name : {{ $record->name }}
    </li>
    <li class="list-group-item">
        Date : {{ $record->date }}
    </li>
    <li class="list-group-item">
        Remarks : {{ $record->comments }}
    </li>
</div>
<br>
@endforeach
@endsection
