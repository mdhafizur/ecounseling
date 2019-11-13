@extends('layouts.auth')

@section('content')
<h3 class="page-title">@lang('Make Appointment')</h3>
{!! Form::open(['method' => 'POST', 'route' => ['appointments.store']]) !!}

<div class="panel panel-default">
    <div class="panel-heading">

    </div>


    <div class="row">
        <div class="col-xs-12 form-group">
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
            <input type="hidden" id="price" value="0">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 form-group">
            {!! Form::label('date', 'Date*', ['class' => 'control-label']) !!}
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' name="date" class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            <p class="help-block"></p>
            @if($errors->has('date'))
            <p class="help-block">
                {{ $errors->first('date') }}
            </p>
            @endif
        </div>
    </div>


    <div class="col-xs-12 form-group">
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
</div>

</div>
</div>

{!! Form::submit(trans('Create Appointment'), ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@stop
