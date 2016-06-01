@extends('master')

@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý phòng chiếu
        <small>Screen Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li> <a href="{{route('screen')}}"><i class="fa fa-picture-o"></i>Screen</a></li>
        <li class="active">Add</li>
      </ol>
    </section>
    <section class="content">
    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Screen Add</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::open(array('route' => ['screen-add'], 'method'=>'POST', 'class'=>'form-horizontal')) !!}
              <div class="box-body">
                <div class="form-group @if($errors->has('name')) has-error @endif">
                    {!! Form::label('Tên phòng chiếu', null, 
                        array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                    {!! Form::text('name', Input::old('name'), 
                        array('required', 
                            'maxlength' => 50,
                            'class'=>'form-control', 
                            'placeholder'=>'Room 1')) !!}
                    <span class="help-block">{!! $errors->first('name') !!}</span>
                    </div>
                </div>

                <div class="form-group @if($errors->has('decription')) has-error @endif">
                    {!! Form::label('Mô tả', null, 
                        array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                    {!! Form::textarea('decription', Input::old('decription'), 
                        array('required',
                            'maxlength' => 2000,
                            'class'=>'form-control', 
                            'placeholder'=>'Phòng vip')) !!}
                    <span class="help-block">{!! $errors->first('decription') !!}</span>
                    </div>
                </div>

                <div class="form-group @if($errors->has('total_seat')) has-error @endif">
                    {!! Form::label('Tổng số ghế', null, 
                        array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                    {!! Form::text('total_seat', Input::old('total_seat'), 
                        array( 
                        'class'=>'form-control', 
                        'placeholder'=>'100')) !!}
                    <span class="help-block">{!! $errors->first('total_seat') !!}</span>
                    <span class="help-block">Tip! Nên nhập số chia hết cho 10</span>

                    </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{route('screen')}}" class="btn btn-default">Cancel</a>
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

@endsection