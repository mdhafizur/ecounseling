@extends('layouts.app')
@section('content')
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

<br>
@endforeach
@endsection
