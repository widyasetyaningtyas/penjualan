<!DOCTYPE html>
<html>
<head>
	<title>Cetak</title>
</head>
<body onload="javascript:window.print()">

	<center>
		<table style="text-align: center;">
			<tr>
				<td><img src=""></td>
				<td style="font-family: sans-serif;text-align: center;">
					<div style="">
						<h2>Bukti Pembelian Barang</h2>
						<h2>HOKI SHOP</h2>
					</div>
					<p style="">JL. Jendral Soderman KM. 36, Semarang, Jawa Tengah 89265</p>
				</td>
				<hr style="text-align: center">
				<td><img src=""></td>
			</tr>
		</table>
		<br>
		<table class="table table-hover table-striped table-bordered" cellspacing="0" width="100%" border="1">
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
			<tbody>
				@foreach($query as $data)
	                  <td>{{$loop->iteration}}</td>
	                  <td>{{$data->id_penjualan}}</td>
	                  <td>{{$data->nama}}</td>
	                  <td>{{$data->nama_barang}}</td>
	                  <td>{{$data->jumlah_beli}}</td>
	                  <td>{{$data->sub_total}}</td>
	                  <td>{{$data->total}}</td>
				@endforeach
			</tbody>
		</table>
		<table style="text-align: center;">
			<tr>
				<td style="font-family: sans-serif;text-align: center;">
					<div style="text-align: right;float: right;margin-left: 500px;margin-top: 25px;">
						Jepara, {{date('Y-m-d')}}
					</div>
				</td>
			</tr>
		</table>
		<table style="text-align: center;">
			<tr>
				<td style="font-family: sans-serif;text-align: center;">
					<div style="text-align: center;float: right;margin-left: 520px;margin-top: 40px;">
						Petugas
					</div>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>