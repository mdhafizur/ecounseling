@extends('layouts.app')


@section('content')
<header class="v-header container">


    <video src="/files/intro.mp" type="video/mp4" autoplay="true" loop="true" style="float: left;"></video>
    <video width="320" height="240" controls>
        <source src="files/intro1.mp4/" type="video/mp4">

        Your browser does not support the video tag.
    </video>

</header>
<h1>Home</h1>








@endsection
