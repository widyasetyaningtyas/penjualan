@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
      	<div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambahkan Data Barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('barang/store')}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Barang</label>
                  <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukan Nama Barang">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Harga Barang</label>
                  <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan Harga Barang">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Stok Barang</label>
                  <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukan Stok Barang">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Expired</label>
                  <input type="date" class="form-control" id="tgl_expired" name="tgl_expired" placeholder="Masukan Tanggal Expired">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ID Jenis</label>
                  <input type="text" class="form-control" id="id_jenis" name="id_jenis" placeholder="Masukan ID Jenis">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              	<button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-primary pull-right">Tambahkan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</section>
@endsection