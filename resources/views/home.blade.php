@extends('layouts.app')


@section('content')


<!-- <section>
    <h1 style="text-align: center; font-family: Verdana, Geneva, Tahoma, sans-serif;">Welcome To E-Counseling</h1>
    <p>We are here to help you</p>
</section> -->



<!-- <img src='https://lh3.googleusercontent.com/FpfcSVU8MfH6yqZ9AbZD92L6aKI7CNcvnRFt6Fxe7OA879EwXU2vq-rzCiwoVmWVaipIqLN5=w640-h400-e365'
    style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'> -->


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 100%">
        <div class="item active">
            <img src="files/exhibition.jpg" alt="Los Angeles">
        </div>

        <div class="item">
            <img src="files/2.jpg" alt="Chicago">

        </div>

        <div class="item">
            <img src="/files/carlos.jpg" alt="New York">
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
<style>
    img {
        width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

</style>
@endsection
