@extends('layouts.auth')
@section('content')
<h3 style="text-align: center;">Welcome {{ Auth::user()->name }} </h3>
<br>
<br>
<br>
<div style="text-align: center;">
    <button type=" button" onclick="location.href = '/createAppointment';" class="btn btn-info">Make
        Appointment</button>
    <button type=" button" onclick="location.href = '{{route('student.profile')}}';" class="btn btn-info">View & Update
        Profile</button>
    <button type=" button" onclick="location.href = '/viewCprofile';" class="btn btn-info">Available Counselors</button>
    <button type=" button" onclick="location.href = '/student/chat';" class="btn btn-info">Chat</button>
</div>
<br>
<br>
<br>
<div name="assessment" style="text-align: center;">
    <h1>Psychological Assessment</h1>
    <!-- Button trigger modal -->
    <button type=" button" class="btn btn-primary" data-toggle="modal" data-target="#anxietyModal">
        Anxiety Assessment
    </button>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#depressionModal">
        Depression Assessment
    </button>
</div>
<!-- Modal Anxiety -->
<div class="modal fade" id="anxietyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width:600px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anxiety Assessment</h5>
                <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('inc.anxietySurvey')
            </div>
            {{-- <div class="modal-footer" >
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>

      </div> --}}
        </div>
    </div>
</div>








<!-- Modal Depression -->
<div class="modal fade" id="depressionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width:600px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Depression Assessment</h5>
                <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('inc.depressionSurvey')
            </div>
            {{-- <div class="modal-footer" >
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>

      </div> --}}
        </div>
    </div>
</div>
@endsection
