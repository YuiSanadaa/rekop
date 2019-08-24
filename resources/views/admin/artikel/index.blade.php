@extends('layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="content">
		<div class="box">
			<div class="box-header">
				<button class="pull-right btn btn-primary" data-toggle="modal" data-target="#AddArtikel"><i class="fa fa-plus"></i> New Artikel</button>
			</div>
			<div class="box-body">
				<table class="table table-striped table-bordered" id="tableArtikel">
					<thead>
						<tr>
							<th>No.</th>
							<th>Judul Artikel</th>
							<th>Image</th>
							<th>Isi Artikel</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($artikels as $ar)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$ar->judul}}</td>
							<td><a href="{{ asset('artikel/'.$ar->image) }}" data-sub-html="{{$ar->judul}}">
								<img class="img-responsive img-circle" src="{{ asset('artikel/'.$ar->image) }}" style="width: 80px; height: 80px;"></td>
							<td>{{Str::limit($ar->isi, 45)}}<a data-toggle="modal" data-target="#ReadMore" style="cursor: pointer;">Read More</a></td>
							<td></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@foreach($artikels as $at)
<div class="modal fade" id="ReadMore" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Detail isi Artikel</h4>
			</div>
			<div class="modal-body">
				<center><b>{{$at->judul}}</b></center>
				<p>{{$at->isi}}</p>
			</div>	
		</div>
	</div>
</div>
@endforeach
<div class="modal fade" id="AddArtikel" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">New Artikel</h4>
				</div>
				<form action="{{route('artikel.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="modal-body">
						<div class="row">
							<div class="col-md-3">
								<h5>Judul</h5>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" name="judul">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<h5>Images</h5>
							</div>
							<div class="col-md-9">
								<input type="file" class="form-control" name="image" id="exampleInputFile">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<h5>Isi</h5>
							</div>
							<div class="col-md-9">
								<textarea class="form-control" name="isi" rows="3"></textarea>
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
@endsection
@section('foot-content')
<script>
	$('#tableArtikel').DataTable();
</script>
@endsection