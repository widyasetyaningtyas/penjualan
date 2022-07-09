@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Edit Data Penjualan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Penjualan</li>
      </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form"s action="{{url('/penjualan/update/'.$penjualan->id)}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">No Penjualan</label>
                  <input type="text" class="form-control" id="id_penjualan" name="id_penjualan" value="{{$penjualan->id_penjualan}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ID Pembeli</label>
                  <input type="text" class="form-control" id="id_pembeli" name="id_pembeli" value="{{$penjualan->id_pembeli}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Pembeli</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="{{$penjualan->nama}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ID Barang</label>
                  <input type="text" class="form-control" id="id_barang" name="id_barang" value="{{$penjualan->id_barang}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Barang</label>
                  <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{$penjualan->nama_barang}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Harga</label>
                  <input type="text" class="form-control" id="harga" name="harga" value="{{$penjualan->harga}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Beli</label>
                  <input type="text" class="form-control" id="jumlah_beli" name="jumlah_beli" value="{{$penjualan->jumlah_beli}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Sub Total</label>
                  <input type="text" class="form-control" id="sub_total" name="sub_total" value="{{$penjualan->sub_total}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Total</label>
                  <input type="text" class="form-control" id="total" name="total" value="{{$penjualan->total}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Bayar</label>
                  <input type="text" class="form-control" id="bayar" name="bayar" value="{{$penjualan->bayar}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kembali</label>
                    <input type="text" class="form-control" id="kembali" name="kembali" value="{{$penjualan->kembali}}">
                </div>
              </div>
                  <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
</section>
@endsection