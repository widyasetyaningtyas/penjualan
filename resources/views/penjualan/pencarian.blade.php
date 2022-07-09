@extends('template.main')
@section('content')
<section class="content-header">
	<h1>
		Pencarian
		<small>Control Panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Pencarian</li>
	</ol>
</section>
<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Pencarian</h3>
		</div>

		<div class="box-body no-padding">
			<div class="col-md-12">
				<form class="navbar-form navbar-left" role="search" action="{{url('pencarian')}}">
					<div class="input-group">
						<input type="text" class="form-control" value="{{Request::get('q')}}" placeholder="Cari Berdasarkan ID" name="q" id="srch-term">
						<div class="input-group-btn">
							<button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
				<a href="{{url('cetak?q='.Request::get('q'))}}" class="btn btn-primary" style="margin: 9px 0 0 2px;">Cetak <i class="fa fa-print"></i></a>
			</div>
		</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>No Penjualan</th>
						<th>Nama Pembeli</th>
						<th>Nama Barang</th>
						<th>Jumlah Beli</th>
						<th>Sub Total</th>
						<th>Total</th>
						<th>Bayar</th>
						<th>Kembali</th>
					</tr>
				</thead>
			<tbody id="add-row">
				@if(isset($data))
				@foreach($data as $j => $row)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$row->id_penjualan}}</td>
					<td>{{$row->nama}}</td>
					<td>{{$row->nama_barang}}</td>
					<td>{{$row->jumlah_beli}}</td>
					<td>{{$row->sub_total}}</td>
					<td>{{$row->total}}</td>
					<td>{{$row->bayar}}</td>
					<td>{{$row->kembali}}</td>
				</tr>
				@endforeach
				@else
				<tr>
					<td colspan="8" class="text-center">Belum ada data yang dicari</td>
				</tr>
				@endif
			</tbody>
			</table>
		</div>
	</div>
</section>
@endsection