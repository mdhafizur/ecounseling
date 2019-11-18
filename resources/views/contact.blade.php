@extends('layouts.app')

@section('content')
<h1 style="text-align: center; padding: 40px;">GET IN TOUCH WITH US</h1>
<div class="row justify-content-center">

    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Enter name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder'=>'Enter E-mail Address'])}}
    </div>
    <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder'=>'Write your message'])}}
    </div>
    <div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
</div>
@endsection
