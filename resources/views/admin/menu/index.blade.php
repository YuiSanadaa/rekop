@extends('layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="content">
		<div class="box">
			<div class="box-header">
				<button class="pull-right btn btn-primary" data-toggle="modal" data-target="#AddMenu"><i class="fa fa-plus"></i> New Menu</button>
			</div>
			<div class="box-body">
				<table class="table table-striped table-bordered" id="tableMenu">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Beans</th>
							<th>Harga</th>
							<th>Image</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($Menus as $q)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$q->name}}</td>
							<td>{{$q->beans}}</td>
							<td>{{$q->price}}</td>
							<td><a href="{{ asset('menu/'.$q->image) }}" data-sub-html="{{$q->nama}}">
								<img class="img-responsive img-circle" src="{{ asset('menu/'.$q->image) }}" style="width: 80px; height: 80px;"></td>									
								<td>
									<button class="btn btn-circle btn-warning" data-toggle="modal" data-target="#EditMenu{{$q->id}}"><i class="fa fa-pencil"></i></button>
									<button class="btn btn-circle btn-danger" data-toggle="modal" data-target="#DeleteMenu{{$q->id}}"><i class="fa fa-trash"></i></button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="AddMenu" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">New Menu</h4>
				</div>
				<form action="{{route('menu.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="modal-body">
						<div class="row">
							<div class="col-md-3">
								<h5>Nama Menu</h5>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="name">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<h5>Jenis Beans</h5>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="beans">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<h5>Harga</h5>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="price">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<h5>Foto</h5>
							</div>
							<div class="col-md-9">
								<input type="file" name="image" class="form-control" id="exampleInputFile">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	@foreach($Menus as $q)
	<div class="modal fade" id="EditMenu{{$q->id}}" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit Menu</h4>
				</div>
				<form action="{{route('menu.update', $q->id)}}" method="post">
					@csrf
					@method('PUT')
					<div class="modal-body">
						<div class="row">
							<div class="col-md-3">
								<h5>Nama</h5>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="name" value="{{$q->name}}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<h5>Beans</h5>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="beans" value="{{$q->beans}}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<h5>Harga</h5>
							</div>
							<div class="col-md-9">
								<input type="number" class="form-control" name="price" value="{{$q->price}}">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>	
	@endforeach

	@foreach($Menus as $q)
	<div class="modal fade" id="DeleteMenu{{$q->id}}" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Delete Menu</h4>
				</div>
				<div class="modal-body">
					Yakin Menghapus Menu "{{$q->name}}" ?
				</div>
				<form action="{{route('menu.destroy', $q->id)}}" method="post">
					{{method_field('DELETE')}}
					{{csrf_field()}}
					<input type="hidden" name="id" value="{{$q->id}}">
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-danger">Hapus</button>
					</div>					
				</form>
			</div>
		</div>
	</div>	
	@endforeach
	@endsection
	@section('foot-content')
	<script>
		$('#tableMenu').DataTable();
	</script>
	@endsection