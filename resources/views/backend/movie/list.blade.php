@extends('master')

@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý phim
        <small>Film information</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Movie</li>
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
                  <a href="{!! route('movie-add') !!}">
                  <button type="button" class="btn btn-block btn-success">Add new</button></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="movie-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Genre</th>
                  <th>Description</th>
                  <th>Actor</th>
                  <th>Year</th>
                  <th>Durations</th>
                  <th>Trailer</th>
                  <th>Admin</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($arrMovie as $movie)
                    <tr>
                        <td>
                            {{$movie->id}}
                        </td>
                        <td>
                            {{$movie->name}}
                        </td>
                        <td>
                            {{$movie->genre}}
                        </td>
                        <td>
                            {{$movie->decription}}
                        </td>
                        <td>
                            {{$movie->actor}}
                        </td>
                        <td>
                            {{$movie->year}}
                        </td>
                        <td>
                            {{$movie->durations}}
                        </td>
                        <td>
                            {{$movie->trailer}}
                        </td>
                        <td>
                            <a href="{!! route('movie-edit', $movie->id) !!}" class="btn btn-primary btn-xs">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="{!! route('movie-delete', $movie->id) !!}" class="btn btn-danger btn-xs">
                                <i class="fa fa-remove"></i> Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Genre</th>
                  <th>Description</th>
                  <th>Actor</th>
                  <th>Year</th>
                  <th>Durations</th>
                  <th>Trailer</th>
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
    $("#movie-table").DataTable();
  });
</script>
@endsection