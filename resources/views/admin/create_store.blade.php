@extends('layouts.admin_master')

@section('admin_content')

    <br>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">CITYSHOP</li>
        <li class="breadcrumb-item active"><a href="{{ url('admin/stores') }}">Stores Panel</a></li>
        <li class="breadcrumb-item active">Create Store</li>
    </ol>

    <form method="POST" action="{{ url('admin/stores') }}">
    {{ csrf_field() }}
    <div class="form-group row" id="admin_input">

        <div class="col-sm-6">      
            <label for="name" class="col-form-label">Store Name :</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Electro Adnane" required>
        </div>

        <div class="col-sm-6">      
        	<label for="address" class="col-form-label">Address :</label>
        	<input type="text" class="form-control" name="address" id="address" placeholder="bd. Mly. ElAbass TETOUAN">
        </div>

        <div class="col-sm-6">      
        	<label for="tels" class="col-form-label">Phone(s) :</label>
        	<input type="text" class="form-control" name="tels" id="tels" placeholder="06 63 28 54 08 , 06 61 44 25 34 " required>
        </div>

        <div class="col-sm-6">      
        	<label for="emails" class="col-form-label">Email(s) :</label>
        	<input type="text" class="form-control" name="emails" id="emails" placeholder="concact@electro_adnane.com , services@electro_adnane.com">
        </div>
        
        <div class="col-sm-6">      
        	<label for="website" class="col-form-label">Website :</label>
        	<input type="text" class="form-control" name="website" id="website" placeholder="www.ElectroAdnan.com">
        </div>

        <div class="col-sm-6">      
        	<label for="avatar" class="col-form-label">Logo :</label>
        	<input type="text" class="form-control" name="avatar" id="avatar" placeholder="Electro Adnan">
        </div>

        <div class="col-sm-6">      
        	<label for="cover" class="col-form-label">Cover :</label>
        	<input type="text" class="form-control" name="cover" id="cover" placeholder="Electro Adnan">
        </div>

        <div class="col-sm-6">      
        	<label for="description" class="col-form-label">Description :</label>
        	<input type="text" class="form-control" name="description" id="description" placeholder="Electro Adnan">
        </div>
    </div>
    <input class="btn btn-primary" type="submit" value="Submit">
</form>

@endsection