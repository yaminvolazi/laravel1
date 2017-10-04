@extends('layouts.admin_master')

@section('admin_content')

    <br>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">CITYSHOP</li>
        <li class="breadcrumb-item active">Stores Panel</li>
    </ol>

    <div class="card">
    <div class="card-header"><h4>Stores</h4><span><a href="#" class="btn btn-sm btn-success add-new">Create New Store <i class="fa fa-plus" aria-hidden="true"></i></a></span></div>
    <div class="card-body">
        @foreach($stores as $store)
            <h3>{{$store->name}}</h3>
            <hr>
        @endforeach
    </div>
    </div>

@endsection