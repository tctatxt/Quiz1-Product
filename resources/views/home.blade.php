@extends('layout')
@section('container')
<h1>mantap</h1>
    @foreach ($arrmahasiswa as $mhs)
        <h1>{{$mhs}}</h1>
    @endforeach
@endsection
