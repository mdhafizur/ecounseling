@extends('layouts.app')


@section('content')
<header class="v-header container">
    <div class="fullscreen-video-wrap"
        style="position: absolute; overflow: hidden;top: 100px; left: 0; width: 100%; height: 90vh;">

        <video src="/files/intro.mp4" type="video/mp4" autoplay="true" loop="true"></video>
    </div>
</header>
<h1>Home</h1>








@endsection
