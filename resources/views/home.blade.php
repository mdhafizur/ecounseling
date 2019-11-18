@extends('layouts.app')


@section('content')
<header class="v-header container">


    <!-- <video src="/files/intro1.mp4" type="video/mp4" autoplay="true" loop="true" style="float: left;"></video> -->

</header>


<section>
    <h1 style="text-align: center; font-family: Verdana, Geneva, Tahoma, sans-serif;">Welcome To E-Counseling</h1>
    <p>We are here to help you</p>
</section>


<video width="400" height="240" controls style="float:right; position:relative ; right: 50px;">
    <source src="/files/intro1.mp4" type="video/mp4">

    Your browser does not support the video tag.
</video>
<img src='https://lh3.googleusercontent.com/FpfcSVU8MfH6yqZ9AbZD92L6aKI7CNcvnRFt6Fxe7OA879EwXU2vq-rzCiwoVmWVaipIqLN5=w640-h400-e365'
    style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'>




@endsection
