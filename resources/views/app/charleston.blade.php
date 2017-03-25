@extends('layouts.app')


@section('title', 'Michael &amp; Lauren')

@section('content')

    <div class="row">
        <h2>While you are in Charleston for a few days, check out some of these places we love!</h2>
    </div>

        <div class="row">
            <div class="col-sm-12 col-lg-9">
                @foreach($charleston as $place)
                <div class="panel panel-default" id="{{ $place->business_type }}">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-9">
                                <h2 class="panel-title">{{ $place->name }}</h2>
                            </div>
                            <div class="col-sm-3">
                                @if ($place->business_type === 'bar')
                                <span class="label label-default">{{ucfirst($place->business_type)}}</span>
                                @elseif ($place->business_type === 'restaurant')
                                    <span class="label label-primary">{{ucfirst($place->business_type)}}</span>
                                @elseif ($place->business_type === 'shop')
                                    <span class="label label-success">{{ucfirst($place->business_type)}}</span>
                                @elseif ($place->business_type === 'hotel')
                                    <span class="label label-info"> {{ucfirst($place->business_type)}}</span>
                                @elseif ($place->business_type === 'sightseeing')
                                    <span class="label label-warning">{{ucfirst($place->business_type)}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p><b>Why we love it:</b></p>
                        <p> {{ $place->description }}</p>
                        <br>
                        <p><b>Where is it?</b></p>
                        <p> {{ $place->location }}</p>
                        <br>
                        <p><b>Website</b></p>
                        <p> <a href="{{ $place->link }}"> {{ $place->link }}</a></p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-3">
                <p>Search Options</p><hr>
                <label>
                    <input type="checkbox" id="filters" value="bar"> Bars
                </label><br>
                <label>
                    <input type="checkbox" id="filters" value="restaurant"> Restaurant
                </label><br>
                <label>
                    <input type="checkbox" id="filters" value="hotel"> Hotels
                </label><br>
                <label>
                    <input type="checkbox" id="filters" value="store"> Shops
                </label><br>
                <label>
                    <input type="checkbox" id="filters" value="sightseeing"> Sightseeing
                </label>
            </div>
        </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('input[type=checkbox]:checked').each(function() {
                $("div.panel.panel-default").hide();
                $("#" + $(this).val()).show();
            });
        });
    </script>

@endsection