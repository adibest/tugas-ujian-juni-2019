@extends('layouts.app')
@section('title', 'Dashboard')
@section('header')
<h1>
	Dashboard
	<small>Control panel</small>
</h1>
<ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Dashboard</li>
</ol>
@endsection
@section('content')
			<div class="row">
				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-aqua">
						<div class="inner">
							<h3>{{$countAuthor}}</h3>

							<p>Authors</p>
						</div>
						<div class="icon">
							<i class="fa fa-pencil-square-o"></i>
						</div>
						<a href="{{ route('authors.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-green">
						<div class="inner">
							<h3>{{$countBook}}</h3>

							<p>Books</p>
						</div>
						<div class="icon">
							<i class="fa fa-book"></i>
						</div>
						<a href="{{ route('books.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3>{{$countPublisher}}</h3>

							<p>Publishing</p>
						</div>
						<div class="icon">
							<i class="fa fa-print"></i>
						</div>
						<a href="{{ route('publishers.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-red">
						<div class="inner">
							<h3>{{$countMember}}</h3>

							<p>Members</p>
						</div>
						<div class="icon">
							<i class="fa fa-users"></i>
						</div>
						<a href="{{ route('members.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>
@endsection