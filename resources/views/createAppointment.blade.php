@extends('layouts.auth')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif
<h3 class="page-title" style="text-align: center;">@lang('Make Appointment')</h3>
{!! Form::open(['method' => 'POST', 'route' => ['appointments.store']]) !!}


<div class="row justify-content-center">
    <div class="col-md-8 form-group">
        <div class="col-md-8 form-group">
            {!! Form::label('counselor_id', 'Counselor*', ['class' => 'control-label']) !!}
            <select id="counselor_id" name="counselor_id" class="form-control select2" required>
                <option value="">Please select</option>
                @foreach($counselors as $counselor)
                <option value="{{ $counselor->id }}" {{ (old("client_id") == $counselor->id ? "selected":"") }}>
                    {{ $counselor->name }} </option>
                @endforeach

            </select>

            <p class="help-block"></p>
            @if($errors->has('counselor_id'))
            <p class="help-block">
                {{ $errors->first('counselor_id') }}
            </p>
            @endif
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
            {!! Form::textarea('comments', old('comments'), ['class' => 'form-control ', 'placeholder' => ''])
            !!}
            <p class="help-block"></p>
            @if($errors->has('comments'))
            <p class="help-block">
                {{ $errors->first('comments') }}
            </p>
            @endif
        </div>
        <div class="col-md-8 form-group">
            {!! Form::submit(trans('Create Appointment'), ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @stop

        </div>

    </div>

</div>
<div class="form-group" style=" position:absolute; top: 200px; right: 50px;">
    <h3 class="page-title" style="text-align: center;">@lang('Your Appointments')</h3>
    @forelse ($counselorS as $counselorS)

    <li class="list-group-item" style="height: 100px;">
        <img src="/uploads/avatars/{{$counselorS->avatar}}"
            style="width: 60px; height: 60px; position:absolute; top:1x; left: 10px; border-radius:50% ; ">
    </li>
    <li class="list-group-item">
        Counselor Name: {{ $counselorS->name }}
    </li>
    <li class="list-group-item">
        Type: {{ $counselorS->type }}
    </li>
    <li class="list-group-item">
        Appointment Date: {{ $counselorS->date }}
    </li>
    <li class="list-group-item">
        email: {{ $counselorS->email }}
    </li>
    <li class="list-group-item">
        Contact: {{ $counselorS->contact }}
    </li>
    @empty
    <li class="list-group-item">
        <em class="text-muted">No appointments</em>
    </li>
    @endforelse
</div>
