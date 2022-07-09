@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Tampilan Data
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tampilan Data</li>
      </ol>
</section>
<section class="content">
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
              <h1><center>Tampilan Data Penjualan</center></h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('/penjualan/store')}}" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Penjualan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_penjualan" id="id_penjualan" readonly value="{{$penjualan->id_penjualan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID Pembeli</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_pembeli" id="id_pembeli" readonly value="{{$penjualan->id_pembeli}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Pembeli</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$penjualan->nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_barang" id="id_barang" readonly value="{{$penjualan->id_barang}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_barang" id="nama_barang" readonly value="{{$penjualan->nama_barang}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga" id="harga" readonly value="{{$penjualan->harga}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Beli</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_beli" id="jumlah_beli" readonly value="{{$penjualan->jumlah_beli}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Sub Total</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="sub_total" id="sub_total" readonly value="{{$penjualan->sub_total}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Total</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="total" id="total" readonly value="{{$penjualan->total}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Bayar</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="bayar" id="bayar" readonly value="{{$penjualan->bayar}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kembali</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kembali" id="kembali" readonly value="{{$penjualan->kembali}}">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{url('/penjualan')}}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
                <a href="{{url('penjualan/cetak/'.$penjualan->id)}}" class="btn btn-sm btn-primary pull-right">cetak <i class="fa fa-print"></i></a>
                <a href="{{url('/penjualan/edit/'.$penjualan->id)}}" class="btn btn-sm btn-warning pull-right" style="margin-right: 20px;">Edit <i class="fa fa-pencil"></i></a>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</section>
@endsection