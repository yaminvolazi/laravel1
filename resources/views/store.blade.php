@extends('layouts.master')

@section('content')

    <br>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">CITYSHOP</li>
        <li class="breadcrumb-item active"><a href="{{ url('stores') }}">Stores</a></li>
        <li class="breadcrumb-item active">{{$name}}</li>
    </ol>

@endsection