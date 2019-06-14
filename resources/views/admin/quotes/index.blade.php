@extends('layouts.master')
@section('content')
	<div class="content-wrapper">
		<div class="content">
			<div class="box">
				<div class="box-header">
					<button class="pull-right btn btn-primary" data-toggle="modal" data-target="#AddQuotes"><i class="fa fa-plus"></i> New Quotes</button>
				</div>
				<div class="box-body">
					<table class="table table-striped table-bordered" id="tableQuotes">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Quotes</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($quotes as $q)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$q->nama}}</td>
								<td>{{$q->quotes}}</td>
								<td>
									@if($q->approve == '1')
									<label class="label label-warning">Pending</label>
									@elseif($q->approve == '2')
									<label class="label label-success">Accepted</label>
									@elseif($q->approve == '3')
									<label class="label label-danger">Rejected</label>
									@endif
								</td>
								<td>
									<button class="btn btn-circle btn-warning" data-toggle="modal" data-target="#EditQuotes{{$q->id}}"><i class="fa fa-pencil"></i></button>
									<button class="btn btn-circle btn-danger" data-toggle="modal" data-target="#DeleteQuotes{{$q->id}}"><i class="fa fa-trash"></i></button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="AddQuotes" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">New Quotes</h4>
				</div>
				<form action="{{route('quotes.store')}}" method="post">
					@csrf
					<div class="modal-body">
						<div class="row">
							<div class="col-md-3">
								<h5>Nama</h5>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="nama">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<h5>Quotes</h5>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="quotes">
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
	@foreach($quotes as $q)
	<div class="modal fade" id="EditQuotes{{$q->id}}" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit Quotes</h4>
				</div>
				<form action="{{route('quotes.update', $q->id)}}" method="post">
					@csrf
					@method('PUT')
					<div class="modal-body">
						<div class="row">
							<div class="col-md-3">
								<h5>Nama</h5>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="nama" value="{{$q->nama}}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<h5>Quotes</h5>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="quotes" value="{{$q->quotes}}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<h5>Status</h5>
							</div>
							<div class="col-md-9">
								<select class="form-control" name="approve">
									{{$q->approve}}
									<option value="1">Pending</option>
									<option value="2">Accepted</option>
									<option value="3">Rejected</option>
								</select>
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

	@foreach($quotes as $q)
	<div class="modal fade" id="DeleteQuotes{{$q->id}}" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Delete Quotes</h4>
				</div>
				<div class="modal-body">
					Yakin Menghapus Quotes "{{$q->quotes}}" ?
				</div>
				<form action="{{route('quotes.destroy', $q->id)}}" method="post">
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
	$('#tableQuotes').DataTable();
</script>
@endsection