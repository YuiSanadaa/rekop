@extends('layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="content">
		<div class="box">
			<div class="box-body">
				<table class="table table-striped table-bordered" id="tableMenu">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>No. Telepon</th>
							<th>Email</th>
							<th>Pesan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($pesans as $q)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$q->name}}</td>
							<td>{{$q->phone}}</td>
							<td>{{$q->email}}</td>
							<td>{{$q->pesan}}</td>									
								<td>
									<button class="btn btn-circle btn-success"><i class="fa fa-reply"></i></button>
									<button class="btn btn-circle btn-danger" data-toggle="modal" data-target="#DeletePesan{{$q->id}}"><i class="fa fa-trash"></i></button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	@foreach($pesans as $q)
	<div class="modal fade" id="DeletePesan{{$q->id}}" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Delete Menu</h4>
				</div>
				<div class="modal-body">
					Yakin Menghapus Pesan dari "{{$q->nama}}" ?
				</div>
				<form action="{{route('pesan.destroy', $q->id)}}" method="post">
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