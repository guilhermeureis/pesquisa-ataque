@extends('model')

@section('title')
    Pesquisa - Redirecionamento
@stop

@section('head')

@stop

@section('body')
    <div class="container">
        <div class="row">
            <h1>Seja Bem Vindo!</h1>
            <p>Escolha uma opção para continuar:</p>
            <ol>
                <li><a href="{{route('facebook')}}">Facebook</a></li>
                <li><a href="{{route('instagram')}}">Instagram</a></li>
            </ol>

        </div>
    </div>

@stop