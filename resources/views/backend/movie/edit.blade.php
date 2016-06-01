@extends('master')

@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý phim
        <small>Film Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li> <a href="{{route('movie')}}"><i class="fa fa-film"></i>Movie</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>
    <section class="content">
    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Movie Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::model($form, array('route' => ['movie-edit', $id], 'method'=>'POST', 'class'=>'form-horizontal')) !!}
            <input type="hidden" name="id" value="{!!$id!!}"/>

              <div class="box-body">
                <div class="form-group @if($errors->has('name')) has-error @endif">
                    {!! Form::label('Tên phim', null, 
                        array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                    {!! Form::text('name', Input::old('name'), 
                        array('required', 
                            'maxlength' => 50,
                            'class'=>'form-control', 
                            'placeholder'=>'Tên phim')) !!}
                    <span class="help-block">{!! $errors->first('name') !!}</span>
                    </div>
                </div>

                <div class="form-group @if($errors->has('genre')) has-error @endif">
                    {!! Form::label('Thể loại', null, 
                        array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                    {!! Form::text('genre', Input::old('genre'), 
                        array('required', 
                        'class'=>'form-control', 
                        'placeholder'=>'Hành động, kinh dị, ...')) !!}
                        <span class="help-block">{!! $errors->first('genre') !!}</span>
                    </div>
                </div>

                <div class="form-group @if($errors->has('decription')) has-error @endif">
                    {!! Form::label('Mô tả', null, 
                        array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                    {!! Form::textarea('decription', Input::old('decription'), 
                        array('required',
                            'maxlength' => 100,
                            'class'=>'form-control', 
                            'placeholder'=>'Mô tả cho bộ phim')) !!}
                    <span class="help-block">{!! $errors->first('decription') !!}</span>
                    </div>
                </div>

                <div class="form-group @if($errors->has('actor')) has-error @endif">
                    {!! Form::label('Diển viên', null, 
                        array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                    {!! Form::text('actor', Input::old('actor'), 
                        array('required',
                            'maxlength' => 100,
                            'class'=>'form-control', 
                            'placeholder'=>'Thành Long, Lưu Diệc Phi, ...')) !!}
                    <span class="help-block">{!! $errors->first('actor') !!}</span>
                    </div>
                </div>
                <div class="form-group @if($errors->has('year')) has-error @endif">
                    {!! Form::label('Năm sản xuất', null, 
                        array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                    {!! Form::text('year', Input::old('year'), 
                        array( 
                        'class'=>'form-control', 
                        'placeholder'=>'2016')) !!}
                        <span class="help-block">{!! $errors->first('year') !!}</span>
                    </div>
                </div>
                <div class="form-group @if($errors->has('durations')) has-error @endif">
                    {!! Form::label('Thời gian phim', null, 
                        array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                    {!! Form::text('durations', Input::old('durations'), 
                        array('required', 
                        'class'=>'form-control', 
                        'placeholder'=>'100 phút')) !!}
                    <span class="help-block">{!! $errors->first('durations') !!}</span>
                    </div>
                </div>

                <div class="form-group @if($errors->has('trailer')) has-error @endif">
                    {!! Form::label('Trailer phim', null, 
                        array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                    {!! Form::text('trailer', Input::old('trailer'), 
                        array(
                        'class'=>'form-control', 
                        'placeholder'=>'http://')) !!}
                    <span class="help-block">{!! $errors->first('trailer') !!}</span>
                    </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{route('movie')}}" class="btn btn-default">Cancel</a>
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