@extends('master')
@section('css')
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}">
@endsection
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Suất chiếu phim
        <small>Chỉnh sửa suất chiếu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('performance')}}"><i class="fa fa-clock-o"></i> Performance</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>
    <section class="content">
    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Performance Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::model($form, array('route' => ['performance-edit', $id], 'method'=>'POST', 'class'=>'form-horizontal')) !!}
                <input type="hidden" name="id" value="{!!$id!!}"/>

              <div class="box-body">
                <div class="form-group @if($errors->has('performance_time')) has-error @endif">
                    {!! Form::label('Suất chiếu', null, 
                        array('class' => 'col-sm-2 control-label',
                        'for' => 'timepicker')) !!}
                    <div class="col-sm-4">
                        <div class="input-group bootstrap-timepicker">
                          {!! Form::text('performance_time', Input::old('performance_time'),
                              array('required',
                                  'class'=>'form-control timepicker',
                                  'placeholder'=>'09:00',
                                  'id' => 'timepicker')) !!}
                          <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                          </div>
                        </div>
                        <span class="help-block">{!! $errors->first('performance_time') !!}</span>
                    </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{route('performance')}}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            {!! Form::close() !!}

        </div>
    </div>
    </section>
</div>
@endsection

@section('script')
<!-- bootstrap time picker -->
<script src="{{asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>

<script type="text/javascript">
$(function () {
    $(".timepicker").timepicker({
      showInputs: false,
      showMeridian: false
    });
  });
</script>
@endsection