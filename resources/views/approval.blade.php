@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Approval</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Type</td>
                                <td>Contact</td>
                                <td>Resume</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($counselors as $counselor)
                            <tr>
                                <th>{{$counselor->name}}</th>
                                <th>{{$counselor->email}}</th>
                                <th>{{$counselor->type}}</th>
                                <th>{{$counselor->contact}}</th>
                                <th>@if($counselor->resume != 'empty')<a
                                        href="{{url('/pdf')}}/{{$counselor->resume}}">Download
                                        PDF</a>@endif</th>

                                <th>@if($counselor->status==0) Inactive @else Active @endif</th>
                                <th><a href="{{route('status', ['id'=>$counselor->id])}}">@if($counselor->status==1)Inactive
                                        @else Active @endif</a></th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
