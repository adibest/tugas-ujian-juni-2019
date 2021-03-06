@extends('layouts.app')

@section('title', $title)

@section('head-script')
	
	<link rel="stylesheet" href="{{asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection

@section('end-script')

	<script src="{{asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
	{{-- <script src="{{asset('adminlte/dist/js/custom.js')}}"></script> --}}
	<script type="text/javascript">
		var table;
		$(function() {
		    table = $('#books').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: '{{$ajax}}',
        		// order: [[3,'desc']],
		        columns: [
		            { data: 'id', searchable: false, orderable: false},
		            { data: 'date', searchable: false, orderable: false},
		            { data: 'member_id', searchable: false, orderable: false},
		            { data: 'book_id', searchable: false, orderable: false},
		            { data: 'set_return', searchable: false, orderable: false},
		            { data: 'return_date', searchable: false, orderable: false},
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

	@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
	@endif

	<div class="box">
		<div class="box-header with-border">
		  	{{-- <h3 class="box-title">Title</h3> --}}
		     <a href="{{$create}}" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Create</a>
		</div>
		<div class="box-body">
		  	<table id="books" class="table table-bordered table-hover">
	            <thead>
		            <tr>
		              	<th>#</th>
		              	<th>Date</th>
		              	<th>Member</th>
		              	<th>Book</th>
		              	<th>Set Return</th>
		              	<th>Return Date</th>
		              	<th>Action</th>
		            </tr>
	            </thead>
	            <tbody>
		        </tbody>
		    </table>
		</div>
	</div>


@endsection