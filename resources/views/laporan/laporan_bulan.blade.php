@extends('template.main')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Data Laporan Bulan</h3>
				</div>

				<div class="box-body">
					<form class="navbar-form" role="search" action="{{url('laporan')}}">
						<div class="form-group">
							<a href="{{url('/laporan/cetak?bulan='.Request::get('bulan'))}}" class="btn btn-primary" style="float: right;margin: 0 0 0 20px;" target="_blank">Cetak</a>
							<select class="form-control" name="bulan">
								<option value="01">Januari</option>
								<option value="02">Febuari</option>
								<option value="03">Maret</option>
								<option value="04">April</option>
								<option value="05">Mei</option>
								<option value="06">Juni</option>
								<option value="07">Juli</option>
								<option value="08">Agustus</option>
								<option value="09">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember	</option>
							</select>
							<button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
						</div>
					</form>
					<table id="example2" class="table table-bordered table-hover">
						<tr>
							<th>No</th>
							<th>ID Penjualan</th>
							<th>Barang</th>
							<th>Jumlah Beli</th>
							<th>Sub Total</th>
							<th>Total</th>
							<th>Bayar</th>
							<th>Tanggal Transaksi</th>
							<th>Nama User</th>
						</tr>
						@foreach($data as $query)
						<tr>
							<td>{{$loop->iteration}}</td>
			                <td>{{$query->id_penjualan}}</td>
			                <td>{{$query->nama_barang}}</td>
			                <td>{{$query->jumlah_beli}}</td>
			                <td>{{$query->sub_total}}</td>
			                <td>{{$query->total}}</td>
			                <td>{{$query->bayar}}</td>
			                <td>{{$query->created_at}}</td>
			                <td>{{$query->username}}</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection