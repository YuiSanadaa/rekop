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
							<td>{{$ar->image}}</td>
							<td>{{$ar->isi}}</td>
							<td></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
@section('foot-content')
<script>
	$('#tableArtikel').DataTable();
</script>
@endsection