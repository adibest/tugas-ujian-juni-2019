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
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
                <a href="{{$url}}" class="btn btn-warning"><i class="fa fa-fw fa-arrow-left"></i> Back</a>
          </div>
            {!! form_start($form, ['class' => 'form-horizontal']) !!}
          <div class="box-body">
            <div class="form-grup">
              <div class="col-sm-12">
                {!! form_rest($form) !!}
              </div>
            </div>
          </div>
          <div class="box-footer">
              <button type="submit" class="btn btn-primary pull-right">Submit</button>
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
