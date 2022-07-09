@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Jenis</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('jenis/create')}}" class="btn btn-info">Tambah Data Jenis</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Nama Jenis</th>
	                  <th>Aksi</th>
	                </tr>
                </thead>
                <tbody>
	                <tr>
	                  @foreach($jenis as $data)
	                  <td>{{$loop->iteration}}</td>
	                  <td>{{$data->nama_jenis}}</td>
	                  <td>
	                  	<a href="{{url('jenis/edit/'.$data->id_jenis)}}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
	                  	<a href="{{url('jenis/destroy/'.$data->id_jenis)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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