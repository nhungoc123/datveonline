@extends('master')

@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý chỗ ngồi
        <small>Seat information</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Seats</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    @if(Session::has('message'))
        <div class="alert {{ Session::get('alert-class', 'alert-success') }} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            {{ Session::get('message') }}
        </div>
    @endif
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            {!! Form::open(array('route' => ['seat'], 'method'=>'POST', 'class'=>'form-horizontal')) !!}
                <input type="hidden" name="mode" value="search"></input>
                <div class="form-group @if($errors->has('screen')) has-error @endif">
                    {!! Form::label('Phòng chiếu', null,
                        array('class' => 'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                    {!! Form::select('screen', $arrScreen,
                        $screen,
                        array('required',
                            'class'=>'form-control',
                        )) !!}
                    <span class="help-block">{!! $errors->first('screen') !!}</span>
                    </div>
                </div>

                <button type="submit" class="btn btn-info pull-center">Search</button>
                {!!Form::close()!!}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if (count($arrData) > 0)
                <ul>
                    @foreach ($arrData as $data)
                    <p class="form-group">
                    <label>
                      <input type="radio" name="r3" class="flat-red" checked>
                    </label>
                    <label>
                      <input type="radio" name="r3" class="flat-red">
                    </label>
                  </div>
                    @endforeach
                </ul>
            @endif
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section('script')
<script type="text/javascript">
  $(function () {
    //Flat red color scheme for iCheck
    $('input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
  });
</script>
@endsection