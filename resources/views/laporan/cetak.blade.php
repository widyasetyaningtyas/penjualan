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
					<div style="text-align: center;">
						<h2>Laporan Penjualan</h2>
						<h2>Hoki Shop</h2>
					</div>
					<p style="text-align: center;">Jl. Kehormatan No.19 Duri Kepa, Kebon Jeruk, Jakarta Timur</p>
				</td>
				<hr style="text-align: center">
				<td><img src=""></td>
			</tr>
		</table>
		<br>
		<table cellspacing="0" width="100%" border="1">
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
						Admin
					</div>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>