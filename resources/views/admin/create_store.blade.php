@extends('layouts.admin_master')

@section('admin_content')

    <br>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">CITYSHOP</li>
        <li class="breadcrumb-item active"><a href="{{ url('admin/stores') }}">Stores Panel</a></li>
        <li class="breadcrumb-item active">Create Store</li>
    </ol>

@endsection