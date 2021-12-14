@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Starter</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Starter</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		{{-- main content here --}}
	
		<form method="POST" action='{{route('facultySave')}}'>
		@csrf
			<div class="form-group">
				<label id='txtNameId' for="txtName">Name</label>
				<input type="text" class="form-control" id="txtName" name="name" placeholder="Enter Faculty Name" required>
			</div>
			<input type="submit" class="btn btn-primary" value="Submit">
		</form>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection