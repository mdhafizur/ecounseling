<h1>Reviews</h1>
@foreach($reviews as $review)
<div id="app">
    <!-- <li class="list-group-item">
        <star-rating :rating="{{$review->rating}}">
        </star-rating>
    </li> -->
    <li class="list-group-item">
        {{ $review->review }}
    </li>


</div>
<br>
@endforeach
<li class="list-group-item">
    Average Rating: {{ $avgRating }}
</li>
