@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('pengguna/create')}}" class="btn btn-info">Tambah Data User</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Username</th>
	                  <th>Password</th>
	                  <th>Level</th>
	                  <th>Aksi</th>
	                </tr>
                </thead>
                <tbody>
	                <tr>
	                  @foreach($pengguna as $data)
	                  <td>{{$loop->iteration}}</td>
	                  <td>{{$data->username}}</td>
	                  <td>{{$data->password}}</td>
	                  <td>{{$data->level}}</td>
	                  <td>
	                  	<a href="{{url('pengguna/edit/'.$data->id_user)}}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
	                  	<a href="{{url('pengguna/destroy/'.$data->id_user)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
	                  </td>
	                </tr>
	                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection