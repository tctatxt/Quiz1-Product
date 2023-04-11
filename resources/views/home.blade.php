@extends('layout')
@section('judul', 'The Menu')
@section('container')
@section('keywords', 'Makanan korea, harga makanan korea,Korean Food, Bibimbap, Topoki, Ramyeon')
@section('description', 'List of Korean Food')
    <h1 class="mb-3 is-flex is-justify-content-center is-size-3">The Menu</h1>
    @foreach ($arrmakanan as $mkn)
    <a href="makanan/{{$mkn["slug"]}}" class="container is-widescreen">
        @if ($mkn["status"] == 'R')
        <div class="notification has-background-grey-light has-text-primary-light mb-3 is-flex is-flex-direction-row is-align-content-center">
        @elseif ($mkn["status"] == 'SR')
        <div class="notification has-background-warning has-text-dark mb-3">
        @else
        <div class="notification has-background-danger-dark has-text-primary-light mb-3">
        @endif
        <div class="text">
            <h1 class="is-size-2 has-text-weight-bold">{{$mkn["title"]}}</h1>
            <h3 class="is-underlined has-text-weight-semibold">{{$mkn["price"]}}</h3>
            <p>{{$mkn["desc"]}}</p>
        </div>
        </div>
    </a>
    @endforeach
@endsection
