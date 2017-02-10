@extends('layouts.app')


@section('title', 'Michael &amp; Lauren')

@section('content')

    <div class="header">
        <h2 class="text-center">Lauren &amp; Michael</h2>
        <h4 class="text-center">Charleston, SC - 09-16-2017</h4>
    </div>

    <div class="hero">
        <div class="main--img">
            <img src="{{url('/')}}/img/tree.jpg" class="img-responsive img-thumbnail">
        </div>
    </div>
    <div class="row">

    </div>

    <div class="couples--stories">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <h2 class="text-center">Bride</h2>
                <h3 class="text-center">Lauren Glazer</h3>
            </div>

            <div class="col-md-4">
                <p class="text-center"><i style="color: #FFDF00; margin-top: 2%" class="fa fa-heart-o fa-3x"></i></p>
            </div>
            <div class="col-sm-6 col-md-4">
                <h2 class="text-center">Groom</h2>
                <h3 class="text-center">Michael Trask</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">Our Story</h2>
                @foreach($about as $story)
                    <p class="text-center">{{ $story->content }}</p>
                @endforeach
            </div>
        </div>
    </div>

@endsection