@extends('layouts.app')
@section('content')
@if ($message = Session::get('error'))
<div class="alert alert-danger">
    <p>{{ $message }}</p>
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Waiting for Approval</div>

                <div class="card-body">
                    Your account is waiting for our administrator approval.
                    <br />
                    Please check back later.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
