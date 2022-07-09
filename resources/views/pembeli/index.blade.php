@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pembeli</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('pembeli/create')}}" class="btn btn-info">Tambah Data Pembeli</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Nama</th>
	                  <th>Alamat</th>
	                  <th>No Telepon</th>
	                  <th>Aksi</th>
	                </tr>
                </thead>
                <tbody>
	                <tr>
	                  @foreach($pembeli as $data)
	                  <td>{{$loop->iteration}}</td>
	                  <td>{{$data->nama}}</td>
	                  <td>{{$data->alamat}}</td>
	                  <td>{{$data->no_telp}}</td>
	                  <td>
	                  	<a href="{{url('pembeli/edit/'.$data->id_pembeli)}}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
	                  	<a href="{{url('pembeli/destroy/'.$data->id_pembeli)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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