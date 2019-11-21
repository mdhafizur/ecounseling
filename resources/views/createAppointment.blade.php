@extends('layouts.auth')

@section('content')
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

            <div class="form-group">
                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" />
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
                daysOfWeekDisabled: [0, 6],
                format: 'YYYY-MM-DD HH:mm:ss'

            });
        });

    </script>
</div>
