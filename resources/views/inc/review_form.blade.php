<div>

    <div class="reveal" id="counsleor-review-modal" data-reveal>

        <div>
            <!-- <div>
                <review-form>
                    :counselor="{{$cprofile}}"
                    url="{{route('review.store')}}"
                </review-form>
            </div> -->


            <form action="{{route('review.store')}}" method="POST" role="form">
                {{csrf_field()}}
                <legend>Rate Counselor</legend>
                <div class="form-group">
                    <!-- <star-rating></star-rating> -->

                    <div class="rate" required>
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>



                    <!--
                    <lable for="">Rating</lable>
                    <input type="text" class="form-control" name="rating" id="" placeholder="Input..."> -->



                </div>
                <div class="form-group">
                    <lable for="">Review</lable>
                    <input type="text" class="form-control" name="review" id="" placeholder="Write Your Review"
                        required>
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
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rate:not(:checked)>input {
        position: absolute;
        top: -9999px;
    }

    .rate:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
    }

    .rate:not(:checked)>label:before {
        content: '★ ';
    }

    .rate>input:checked~label {
        color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
        color: #c59b08;
    }

    /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
</style>
