@extends('layouts.master')

@section('content')

<h1>CITYSHOP / Stores</h1>
    @foreach($stores as $store)
        <h3>{{$store->name}}</h3>
        <hr>
    @endforeach

@endsection