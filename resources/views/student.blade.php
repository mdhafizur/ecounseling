@extends('layouts.auth')
@section('content')
<h3>Student</h3>

<a href="{{route('student.profile')}}">My Profile</a>
<a href='/createAppointment'">Make Appointment</a>
<h1>Psychological Assessment</h1>
<!-- Button trigger modal -->
<button type=" button" class="btn btn-primary" data-toggle="modal" data-target="#anxietyModal">
    Anxiety Assessment
    </button>

    <!-- Modal Anxiety -->
    <div class="modal fade" id="anxietyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:600px">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anxiety Assessment</h5>
                    <button type="button" onclick="javascript:window.location.reload()" class="close"
                        data-dismiss="modal" aria-label="Close">
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






    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#depressionModal">
        Depression Assessment
    </button>

    <!-- Modal Depression -->
    <div class="modal fade" id="depressionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:600px">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Depression Assessment</h5>
                    <button type="button" onclick="javascript:window.location.reload()" class="close"
                        data-dismiss="modal" aria-label="Close">
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
