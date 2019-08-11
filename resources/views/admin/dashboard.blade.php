@extends('layouts.master')

@section('content')
	<div class="content-wrapper">
		<div class="content">
			<div class="box">
				<div class="box-header"></div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-3">
							<div class="small-box bg-yellow">
								<div class="inner">
									<h3>{{$allmenu->count()}}</h3>
									<p>Menu</p>
								</div>
								<div class="icon">
									<i class="fa fa-book"></i>
								</div>
								<a href="{{URL('admin/menu')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="small-box bg-red">
								<div class="inner">
									<h3>{{$allartikel->count()}}</h3>
									<p>Artikel</p>
								</div>
								<div class="icon">
									<i class="fa fa-align-center"></i>
								</div>
								<a href="{{URL('admin/artikel')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="small-box bg-green">
								<div class="inner">
									<h3>{{$allpesan->count()}}</h3>
									<p>Kritik dan Saran</p>
								</div>
								<div class="icon">
									<i class="fa fa-file-text"></i>
								</div>
								<a href="{{URL('admin/pesan')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="small-box bg-aqua">
								<div class="inner">
									<h3>{{$alluser->count()}}</h3>
									<p>User</p>
								</div>
								<div class="icon">
									<i class="fa fa-users"></i>
								</div>
								<a href="#" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="small-box bg-yellow">
								<div class="inner">
									<h3>{{$pendingquotes->count()}}</h3>
									<p>Pending Quotes</p>
								</div>
								<div class="icon">
									<i class="fa fa-clock-o"></i>
								</div>
								<a href="{{URL('admin/quotes')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="small-box bg-red">
								<div class="inner">
									<h3>{{$rejectedquotes->count()}}</h3>
									<p>Rejected Quotes</p>
								</div>
								<div class="icon">
									<i class="fa fa-trash"></i>
								</div>
								<a href="{{URL('admin/quotes')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="small-box bg-green">
								<div class="inner">
									<h3>{{$acceptedquotes->count()}}</h3>
									<p>Accepted Quotes</p>
								</div>
								<div class="icon">
									<i class="fa fa-check"></i>
								</div>
								<a href="{{URL('admin/quotes')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="small-box bg-aqua">
								<div class="inner">
									<h3>{{$allquotes->count()}}</h3>
									<p>Total Quotes</p>
								</div>
								<div class="icon">
									<i class="fa fa-quote-right"></i>
								</div>
								<a href="{{URL('admin/quotes')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('foot-content')
@endsection