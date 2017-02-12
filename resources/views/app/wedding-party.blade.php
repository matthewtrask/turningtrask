@extends('layouts.app')


@section('title', 'Michael &amp; Lauren')

@section('content')

    <h2 class="page-header">Our Wedding Party</h2>

    <div class="row">
        <div class="col-sm-9">
            @foreach($party as $person)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3 class="panel-title">{{$person->name}}</h3>
                            </div>
                            <div class="col-sm-3">
                                <p>{{$person->position}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <p> {{$person->story}}</p>
                            </div>
                            <div class="col-sm-7">
                                <img class="thumbnail" src="data:image/jpg;base64,{{ $person->image }}">
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>


@endsection