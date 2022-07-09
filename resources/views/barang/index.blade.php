@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('barang/create')}}" class="btn btn-info">Tambah Data Barang</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Nama Barang</th>
	                  <th>Harga</th>
	                  <th>Stok</th>
	                  <th>Tanggal Expired</th>
	                  <th>ID Jenis</th>
	                  <th>Aksi</th>
	                </tr>
                </thead>
                <tbody>
	                <tr>
	                  @foreach($barang as $data)
	                  <td>{{$loop->iteration}}</td>
	                  <td>{{$data->nama_barang}}</td>
	                  <td>{{$data->harga}}</td>
	                  <td>{{$data->stok}}</td>
	                  <td>{{$data->tgl_expired}}</td>
	                  <td>{{$data->id_jenis}}</td>
	                  <td>
	                  	<a href="{{url('barang/edit/'.$data->id_barang)}}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
	                  	<a href="{{url('barang/destroy/'.$data->id_barang)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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