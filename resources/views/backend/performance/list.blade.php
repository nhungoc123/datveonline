@extends('master')

@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý suất chiếu phim
        <small>Performance information</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Performance</li>
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
              <div class="col-xs-2">
                  <a href="{!! route('performance-add') !!}">
                  <button type="button" class="btn btn-block btn-success">Add new</button></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="performance-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Time</th>
                  <th>Admin</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($arrData as $data)
                    <tr>
                        <td>
                            {{$data->id}}
                        </td>
                        <td>
                            {{$data->performance_time}}
                        </td>
                        <td>
                            <a href="{!! route('performance-edit', $data->id) !!}" class="btn btn-primary btn-xs">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="{!! route('performance-delete', $data->id) !!}" class="btn btn-danger btn-xs">
                                <i class="fa fa-remove"></i> Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Time</th>
                  <th>Admin</th>
                </tr>
                </tfoot>
              </table>
            </div>
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
    $("#performance-table").DataTable();
  });
</script>
@endsection