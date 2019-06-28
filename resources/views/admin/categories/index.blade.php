@extends('layouts.app')

@section('head-script')
	
	<link rel="stylesheet" href="{{asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection

@section('script')

	<script src="{{asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{asset('adminlte/dist/js/custom.js')}}"></script>
	<script type="text/javascript">
		var table;
		$(function() {
		    table = $('#categories').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: '{{$ajax}}',
        		order: [[3,'desc']],
		        columns: [
		            { data: 'id', searchable: false, orderable: false},
		            { data: 'name', searchable: false, orderable: false},
		            { data: 'created_at', searchable: false, orderable: true},
		            { data: 'action', searchable: false, orderable: false}
		        ],
		        columnDefs: [{
		          "targets": 0,
		          "searchable": false,
		          "orderable": false,
		          "data": null,
		          // "title": 'No.',
		          "render": function (data, type, full, meta) {
		              return meta.settings._iDisplayStart + meta.row + 1; 
		          }
		        }],
		    });
		});
	</script>


@endsection

@section('content')

	<div class="box">
		<div class="box-header with-border">
		  	{{-- <h3 class="box-title">Title</h3> --}}
		     <a href="{{$create}}" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Create</a>
		</div>
		<div class="box-body">
		  	<table id="categories" class="table table-bordered table-hover">
	            <thead>
		            <tr>
		              	<th>#</th>
		              	<th>Name</th>
		              	<th>Date</th>
		              	<th>Action</th>
		            </tr>
	            </thead>
	            <tbody>
		        </tbody>
		    </table>
		</div>
	</div>


@endsection