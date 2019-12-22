@extends('layouts.auth')

@section('content')
@if (count($viewCprofile)>0)
@forelse ($viewCprofile as $cprofile)
<ul class="list-group">
    <div class="col-md-10 col-md-offset-1">
        <img src="/uploads/avatars/{{ $cprofile->avatar }}"
            style="width:150px; height:150px; float:left;border-radius: 50%;margin-right: 25px;">
        <h2>{{$cprofile->name}}'s Profile</h2>



    </div>
    <div class="col-md-4">
        <li class="list-group-item">Name: {{$cprofile->name}}</li>
        <li class="list-group-item">Email: {{$cprofile->email}}</li>
        <li class="list-group-item">Counselor Type: {{$cprofile->type}}</li>
        <li class="list-group-item">Contact No: {{$cprofile->contact}}</li>
        <li class="list-group-item">About: {{$cprofile->about}}</li>
        <div class="item-wrapper">

            <a href="#" class="button" data-open="counselor-review-modal">Write A Review</a>

            @include('inc.review_form')
        </div>

    </div>
</ul>

<div class="item-wrapper" style="text-align:justify; top: 100px;">
    <legend>Reviews</legend>
    @if (count($reviews)>0)
    @forelse($reviews as $review)

    <li>
        @if( $review->counselor_id == $cprofile->id)
        {{$review->review}}
        {{$review->rating}}
        <star-rating :rating="{{$review->rating}}">
        </star-rating>
        @endif
    </li>
    @empty

    @endforelse
    @endif
</div>
</div>
@endforeach

@endif
<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large
    modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal"
                aria-label="Close">
                ...
        </div>
    </div>
</div>

@endsection
