@extends('layout')
@section('judul', 'The Menu')
@section('container')
@if ($thefood["status"] == 'R')
    <div class="notification has-background-grey-light has-text-primary-light mb-3">
    @elseif ($thefood["status"] == 'SR')
    <div class="notification has-background-warning has-text-dark mb-3">
    @else
    <div class="notification has-background-danger-dark has-text-primary-light mb-3">
@endif
<h1 class="has-text-weight-bold">{{$thefood["title"]}}</h1>
<h2 class="has-text-weight-semibold">Status : {{$thefood["status"]}}</h2>
<h3 class="has-text-weight-medium">Price : {{$thefood["price"]}}</h3>
{!!$thefood["fulldesc"]!!}
</div>
@endsection
