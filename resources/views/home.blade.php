@extends('layouts.app')


@section('content')


<!-- <section>
    <h1 style="text-align: center; font-family: Verdana, Geneva, Tahoma, sans-serif;">Welcome To E-Counseling</h1>
    <p>We are here to help you</p>
</section> -->



<!-- <img src='https://lh3.googleusercontent.com/FpfcSVU8MfH6yqZ9AbZD92L6aKI7CNcvnRFt6Fxe7OA879EwXU2vq-rzCiwoVmWVaipIqLN5=w640-h400-e365'
    style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'> -->


<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 50%;">
    <!-- Indicators -->
    <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 100%">
        <div class="item active">
            <img src="/files/1.png" alt="New York">
        </div>
        <div class="item ">
            <img src="files/exhibition.jpg" alt="Los Angeles">
        </div>

        <div class="item">
            <img src="files/c.png" alt="Chicago">

        </div>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div><img src="https://img.icons8.com/dusk/64/000000/test-partial-passed.png">
        <p> <strong>Fill Out Psychological Assessment Questionnaire :</strong>
            Student can sign up in our system and do self assessment
        </p>
    </div>
    <div><img src="https://img.icons8.com/dotty/80/000000/appointment-scheduling.png">
        <p><strong>Make Appointemnt With An Expert Counselor :</strong>
            We have expert counselors for you. Who are expert in SESSION, CAREER, ONLINE and PSYCHOTHERAPY.
        </p>
    </div>
    <div>
        <img src="https://img.icons8.com/bubbles/100/000000/people-group-bill--v1.png">
        <p> <strong>Chat With Your Counselor :</strong>
            Make Appointment with our counselor and be in touch with them wehnever you want.
        </p>
    </div>
</div>
<style>
    .item img {
        width: 100%;
        max-height: 50%;
        object-fit: contain;
    }

    .container {
        display: flex;
    }

    .container>div {
        flex: 1;
        padding: 50px;
        padding-left: 140px;
        /*grow*/
    }

    .container p {
        max-width: auto;
        font-size: 15px;
        line-height: 1.4em;
        margin: 0 auto auto -15px;
    }
</style>
@endsection
