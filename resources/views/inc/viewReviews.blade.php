<div class="item-wrapper">
    @forelse($reviews as $review)
    <li>
        {{$review->review}}
    </li>
    @empty

    @endforelse
</div>
