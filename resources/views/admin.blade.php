@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>


                <div class="card-body">
                    Hi boss!
                    <a href="/messages">Messages</a>
                    <button type="button" onclick="location.href = '/messages';" class="btn btn-info">
                        Messages</button>

                    <button type="button" onclick="location.href = '/botAppointment';" class="btn btn-info">Bot
                        Appointments</button>
                    <button type="button" onclick="location.href = '/approval';" class="btn btn-info">Approval</button>
                    <button type="button" onclick="location.href = '/viewCprofile';" class="btn btn-info">Counselors'
                        Profile</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
