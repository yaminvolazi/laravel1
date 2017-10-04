@extends('layouts.admin_master')

@section('admin_content')

<br>
<ol class="breadcrumb">
	<li class="breadcrumb-item">CITYSHOP</li>
	<li class="breadcrumb-item active">Stores Panel</li>
</ol>

<div class="card">
	<div class="card-header"><h4>Stores</h4><span><a href="{{ url('admin/stores/create/form') }}" class="btn btn-sm btn-success add-new">Create New Store <i class="fa fa-plus" aria-hidden="true"></i></a></span></div>
	<div class="card-body">
		<table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">  
			<thead>
				<tr>
					<th># Id</th>
					<th>Store Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th># Id</th>
					<th>Store Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</tfoot>
			<tbody>
            <?php $id=1 ?>
				@foreach($stores as $store)
				<tr>
					<td>{{$id++}}</td>
					<td>{{$store->name}}</td>
					<td>{{$store->tels}}</td>
					<td>{{$store->emails}}</td>
					<td align="center">
						<div class="btn-group admin_datatable" role="group" aria-label="Basic example">
							<a href="#" class="btn btn-secondary btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-secondary btn-danger btn-sm">Delete</a>
                            <a href="#" class="btn btn-secondary btn-info btn-sm">Show</a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection
