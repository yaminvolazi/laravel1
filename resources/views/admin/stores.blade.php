@extends('layouts.admin_master')

@section('admin_content')

    <br>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">CITYSHOP</li>
        <li class="breadcrumb-item active">Stores Panel</li>
    </ol>

    @foreach($stores as $store)
        <h3>{{$store->name}}</h3>
        <hr>
    @endforeach

@endsection