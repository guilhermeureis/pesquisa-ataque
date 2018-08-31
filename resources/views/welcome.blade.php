@extends('model')

@section('title')
    QR Code
@stop

@section('style')
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
    </style>
@stop

@section('body')
    <div class="flex-center position-ref full-height">

        <div class="top-right links">
            <img class="img-responsive img-logo" src="{{asset('images/ish.png')}}" alt="">
        </div>

        <div class="content">
            <div class="title m-b-md">
                <p>Visite nossa pesquisa.</p>
                <hr>
                {!! QrCode::size(300)->generate($url); !!}
            </div>
        </div>
    </div>
@stop
