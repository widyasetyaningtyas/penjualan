@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penjualan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('penjualan/create')}}" class="btn btn-info" style="margin: 10px;">Tambah Data Penjualan</a>
              <a href="{{url('pencarian')}}" class="btn btn-info" style="margin: 10px;">Pencarian <i class="fa fa-search"></i></a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
	                <tr>
	                  <th>No</th>
	                  <th>ID Penjualan</th>
	                  <th>Nama Pembeli</th>
	                  <th>Nama Barang</th>
	                  <th>Jumlah Beli</th>
	                  <th>Sub Total</th>
	                  <th>Total</th>
	                  <th>Aksi</th>
	                </tr>
                </thead>
                <tbody>
	                <tr>
	                  @foreach($query as $data)
	                  <td>{{$loop->iteration}}</td>
	                  <td>{{$data->id_penjualan}}</td>
	                  <td>{{$data->nama}}</td>
	                  <td>{{$data->nama_barang}}</td>
	                  <td>{{$data->jumlah_beli}}</td>
	                  <td>{{$data->sub_total}}</td>
	                  <td>{{$data->total}}</td>
	                  <td>
	                  	<a href="{{url('/penjualan/show/'.$data->id_penjualan)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
	                  	<a href="{{url('penjualan/edit/'.$data->id_penjualan)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
	                  	<a href="{{url('penjualan/destroy/'.$data->id_penjualan)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
	                  	<a href="{{url('penjualan/struk/'.$data->id_penjualan)}}" class="btn btn-sm btn-primary"><i class="fa fa-print"></i></a>
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