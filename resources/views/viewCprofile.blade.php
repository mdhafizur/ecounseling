@extends('layouts.auth')

@section('content')
@if (count($viewCprofile)>0)
@forelse ($viewCprofile as $cprofile)
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> -->

<div id="app">
    <ul class="list-group">
        <br>
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

            @if (count($reviews)>0)
            @php $total_ratings = 0 @endphp
            @php $number_ratings = 0 @endphp
            @forelse($reviews as $review)



            @if( $review->counselor_id == $cprofile->id)
            @php $total_ratings += $review->rating @endphp
            @php $number_ratings++ @endphp

            @endif



            @empty

            @endforelse
            @if( $total_ratings != 0)
            @php $avg = ($total_ratings/$number_ratings) @endphp

            @else
            @php $avg = 0 @endphp

            @endif
            <li class="list-group-item">
                <h5 class="rating-num">Average Rating : {{$avg}}</h5>
                <p>

                    @while($avg>0)
                    @if($avg >0.5)
                    <i class="fa fa-star"></i>
                    @else
                    <i class="fa fa-star-half"></i>
                    @endif
                    @php $avg--; @endphp
                    @endwhile


                </p>

            </li>
            @endif





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
            <br>
        </div>





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
                            @php $total_ratings = 0 @endphp
                            @php $number_ratings = 0 @endphp
                            @forelse($reviews as $review)



                            @if( $review->counselor_id == $cprofile->id)
                            @php $total_ratings += $review->rating @endphp
                            @php $number_ratings++ @endphp
                            <li>{{$review->review}} </li>


                            @while($review->rating>0)
                            @if($review->rating >0.5)
                            <i class="fa fa-star"></i>
                            @else
                            <i class="fa fa-star-half"></i>
                            @endif
                            @php $review->rating--; @endphp
                            @endwhile


                            @endif



                            @empty

                            @endforelse
                            @if($total_ratings != 0)
                            @php $avg = ($total_ratings/$number_ratings) @endphp
                            <!-- Average Rating : {{$avg}} -->
                            @else
                            @php $avg = 0 @endphp

                            @endif

                            @endif



                        </div>
                    </div>
                </div>

            </div>
        </div>
















    </ul>
</div>


@endforeach

@endif


@endsection
