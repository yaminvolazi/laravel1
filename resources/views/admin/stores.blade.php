@extends('layouts.admin_master')

@section('admin_content')

    <br>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">CITYSHOP</li>
        <li class="breadcrumb-item active">Stores Panel</li>
    </ol>

    <div class="card">
    <div class="card-header"><h4>Stores</h4><span><a href="{{ url('admin/stores/create/form') }}" class="btn btn-sm btn-success add-new">Create New Store <i class="fa fa-plus" aria-hidden="true"></i></a></span></div>
    
    <ul class="list-group list-group-flush">   
    @foreach($stores as $store)

        <li class="list-group-item">{{$store->name}}</li>

    @endforeach
    </ul>

    </div>

@endsection