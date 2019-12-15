@extends('layouts.auth')

@section('content')
@include('inc.messages')
<ul class="col-md-4 form-group">
    @forelse ($appointments as $appointment)
    <img src="/uploads/avatars/{{ $appointment->student->avatar }}" style="width:150px; height:150px">
    <li class="list-group-item">
        Name: {{ $appointment->student->name }}
    </li>
    <li class="list-group-item">
        Email: {{ $appointment->student->email }}
    </li>
    <li class="list-group-item">
        Matric No : {{ $appointment->student->matric }}
    </li>
    <li class="list-group-item">
        Faculty : {{ $appointment->student->faculty }}
    </li>
    <li class="list-group-item">
        Department : {{ $appointment->student->department }}
    </li>
    <li class="list-group-item">
        Year : {{ $appointment->student->year }}
    </li>
    <li class="list-group-item">
        Nationality : {{ $appointment->student->nationality }}
    </li>
    <li class="list-group-item">
        Contact No : {{ $appointment->student->contact }}
    </li>
    <li class="list-group-item">
        About : {{ $appointment->student->about }}
    </li>
    <li class="list-group-item">
        Date/Time: {{ optional($appointment->date)->format('Y-m-d H:i:s') }}
    </li>
    <li class="list-group-item">
        <th><a href="{{route('viewRecords', ['id'=>$appointment->student->id])}}">View Records</a></th>
        <th>
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





<div class="form-group" style=" position:absolute; top: 200px; right: 50px;">
    <h3 class="page-title" style="text-align: center;">@lang('Make Record')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['records.store']]) !!}
    <div class="">
        <div class="col-md-8 form-group">
            <div class="col-md-8 form-group">
                {!! Form::label('student_id', 'Student*', ['class' => 'control-label']) !!}
                <select id="student_id" name="student_id" class="form-control select2" required>
                    <option value="">Please select</option>
                    @forelse ($appointments as $appointment)
                    <option value="{{ $appointment->student->id }}">
                        {{ $appointment->student->name }} </option>
                    @endforeach

                </select>
            </div>
            <div class="col-md-8 form-group">
                {!! Form::label('date', 'Appointment Date*', ['class' => 'control-label']) !!}
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                        <input name="date" type="text" class="form-control datetimepicker-input"
                            data-target="#datetimepicker1" />
                        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <p class="help-block"></p>
                @if($errors->has('date'))
                <p class="help-block">
                    {{ $errors->first('date') }}
                </p>
                @endif
            </div>
            <div class="col-md-8 form-group">
                {!! Form::label('comments', 'Comments', ['class' => 'control-label']) !!}
                {!! Form::textarea('comments', old('comments'), ['class' => 'form-control ', 'placeholder' =>
                '','required'])
                !!}
                <p class="help-block"></p>
                @if($errors->has('comments'))
                <p class="help-block">
                    {{ $errors->first('comments') }}
                </p>
                @endif
            </div>

            <div class="col-md-8 form-group" onclick="return confirm('Are you sure about this record?')">
                {!! Form::submit(trans('Create Record'), ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @stop

            </div>


        </div>
    </div>
</div>
