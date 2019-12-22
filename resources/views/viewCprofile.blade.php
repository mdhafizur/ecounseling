@extends('layouts.auth')

@section('content')
@if (count($viewCprofile)>0)
@forelse ($viewCprofile as $cprofile)
<div id="app">
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





                <div>

                    <!-- Button trigger write review modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#wReviewModal{{$cprofile->id}}">
                        Write Review
                    </button>
                    <!-- Button trigger REVIEWS modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal{{$cprofile->id}}">
                        REVIEWS
                    </button>


                    <!-- Modal Write Review -->
                    <div class="modal fade" id="wReviewModal{{$cprofile->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Give Review</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @include('inc.review_form')
                                </div>

                            </div>
                        </div>
                    </div>








                </div>


                <div>

                    <!-- Modal REVIEWS -->
                    <div class="modal fade" id="exampleModal{{$cprofile->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Check Reviews</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="item-wrapper" style="text-align:justify; top: 100px;">
                                        <legend>Reviews</legend>
                                        @if (count($reviews)>0)
                                        @forelse($reviews as $review)

                                        <li>
                                            @if( $review->counselor_id == $cprofile->id)
                                            {{$review->review}}
                                            {{$review->rating}}
                                            <!-- <star-rating :rating="{{$review->rating}}">
                                            </star-rating> -->
                                            @endif
                                        </li>
                                        @empty

                                        @endforelse
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>














                <!-- <div class="item-wrapper" style="text-align:justify; top: 100px;">
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
        </div> -->
            </div>
    </ul>
</div>


@endforeach

@endif


@endsection
