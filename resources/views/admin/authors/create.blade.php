@extends('layouts.app')

@section('end-script')
  <script src="{{ asset('adminlte/bower_components/jquery-form-validator/form-validator/jquery.form-validator.min.js') }}"></script>
  <script src="{{ asset('adminlte/dist/js/jquery.blockUI.js') }}"></script>
  <script src="{{ asset('adminlte/dist/js/custom.js') }}"></script>
  <script type="text/javascript">
    $.validate({
        form : '.form-horizontal',
        onSuccess : function() {
          waiting();
        }
    });
  </script>
@endsection

@section('content')
  {{-- <div class="box">
  	<div class="box-header with-border">
          <a href="{{$url}}" class="btn btn-warning"><i class="fa fa-fw fa-arrow-left"></i> Back</a>
  	</div>
      {!! form_start($form, ['class' => 'form-horizontal']) !!}
  	<div class="box-body">
  	  	{!! form_rest($form) !!}
  	</div>
  	<div class="box-footer">
  		<div class="col-sm-8 col-sm-offset-2">
  		  	<button type="submit" class="btn btn-primary">Submit</button>
  		</div>
  	</div>
      {!! form_end($form) !!}
  </div> --}}

  <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header with-border">
                <a href="{{$url}}" class="btn btn-warning"><i class="fa fa-fw fa-arrow-left"></i> Back</a>
          </div>
            {!! form_start($form, ['class' => 'form-horizontal']) !!}
          <div class="box-body">
            <div class="form-grup">
              {!! form_rest($form) !!}
            </div>
          </div>
          <div class="box-footer">
            <div class="col-sm-8 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
            {!! form_end($form) !!}
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  <!-- /.content -->
@endsection
