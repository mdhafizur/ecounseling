<div>

    <div class="reveal" id="counsleor-review-modal" data-reveal>

        <div id="app">
            <form action="{{route('review.store')}}" method="POST" role="form">
                {{csrf_field()}}
                <legend>Rate Counselor</legend>
                <div class="form-group">
                    <star-rating>
                    </star-rating>

                    <lable for="">Rating</lable>
                    <input type="text" class="form-control" name="rating" id="" placeholder="Input...">



                </div>
                <div class="form-group">
                    <lable for="">Review</lable>
                    <input type="text" class="form-control" name="review" id="" placeholder="Write Your Review">
                </div>

                <input type="hidden" name="counselor_id" value="{{$cprofile->id}}">

                <button type="submit" class="button">Submit</button>
            </form>


        </div>
        <!-- <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true"></span>
        </button> -->
    </div>
</div>
