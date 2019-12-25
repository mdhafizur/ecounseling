<div class="item-wrapper" style="text-align:justify; top: 100px;">
    <legend>Reviews</legend>
    @if (count($reviews)>0)
    @forelse($reviews as $review)



    @if( $review->counselor_id == $cprofile->id)

    {{$review->review}}
    {{$review->rating}}

    <star-rating :rating="{{$review->rating}}">
    </star-rating>

    @endif



    @empty

    @endforelse

    @endif

</div>
