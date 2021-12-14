@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Faculty</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Faculty</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		<div class="card-header">
			<a href="{{route('facultyForm')}}" class="btn btn-primary">Add Faculty</a>
		</div>
		{{-- main content here --}}
		<table class="table table-hover">
			<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Action</th>
				
			</tr>
			</thead>
			
			<tbody>
			@foreach($faculties as $faculty)
			<tr>
				<td>{{$faculty->id}}</td>
				<td>{{$faculty->name}}</td>
				<td>
					<a href="{{route('facultyEdit',['id' => $faculty->id])}}" class="btn btn-primary">Edit</a>
					<a href="{{route('facultyDelete',['id' => $faculty->id])}}" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			@endforeach
			
		</table>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection