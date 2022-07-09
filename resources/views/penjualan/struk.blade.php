<!DOCTYPE html>
<html>
<head>
	<title>Struk</title>
	<style type="text/css">
		body{
			font-family: Courier New;
		}
		.kotak{
			margin-left: 20px;
			width: 420px;
		}
		.header{
			text-align: center;
			line-height: 0.5;
		}
		.header p{
			font-size: 11px;
		}
		.bagian-1{
			display: flex;
			margin-top: 15px;
			margin-bottom: 15px;
			line-height: 1.3;
			font-size: 15px;
		}
		.bagian-1 ul{
			display: contents;
		}
		.bagian-1 ul li{
			display: block;
		}
		.bagian-2{
			display: inline-flex;
			font-size: 15px;
			margin-top: 15px;
			font-weight: bold;
		}
		.bagian-2-1{
			display: inline-flex;
			margin-top: 20px;
			font-size: 15px;
			margin-bottom: 15px;
		}
		.bagian-3{
			display: flex;
			margin-top: 15px;
			margin-bottom: 15px;
			line-height: 1.3;
			font-size: 15px;
		}
		.bagian-3 ul{
			display: contents;
		}
		.bagian-3 ul li{
			display: block;
		}
		.footer{
			text-align: center;
			margin-top: 40px;
			line-height: 0.3;
		}
		.footer h3{
			font-weight: bold;
			font-size: 20px;
		}
		hr{
			border-style: dashed;
		}
	</style>
</head>
<body onload="javascript:window.print()">
	<div class="container">
		<div class="kotak">
			@foreach($query as $data)
			<div class="header">
				<h3>HOKI SHOP</h3>
				<p>Jl. Kehormatan No.19 Duri Kepa, Kebon Jeruk, Jakarta Timur</p>
			</div><br>
			<hr>
			<div class="bagian-1">
				<div class="left">
					<ul>
						<li>No Penjualan</li>
						<li>Kasir</li>
						<li>Tanggal</li>
					</ul>
				</div>
				<div class="right" style="text-align: right; margin-left: 140px;">
					<ul>
						<li>{{$data->id_penjualan}}</li>
						<li>Widya Setyaningtyas</li>
						<li>Jepara, {{date('d-m-Y')}}</li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="bagian-2">
				<div class="line1" style="margin-left: 10px;">
					<th>Nama Barang</th>
				</div>
				<div class="line1" style="margin-left: 55px;">
					<th>qty</th>
				</div>
				<div class="line1" style="margin-left: 55px;">
					<th>Harga</th>
				</div>
				<div class="line1" style="margin-left: 65px;">
					<th>Total</th>
				</div>
			</div>
			<div class="bagian-2-1">
				<div class="line2" style="margin-left: 10px;">
					<td>{{$data->nama_barang}}</td>
				</div>
				<div class="line2" style="margin-left: 105px;">
					<td>{{$data->jumlah_beli}}</td>
				</div>
				<div class="line2" style="margin-left: 70px;">
					<td>{{$data->harga}}</td>
				</div>
				<div class="line2" style="margin-left: 65px;">
					<td>{{$data->sub_total}}</td>
				</div>
			</div>
			<hr>
			<div class="bagian-3">
				<div class="left" style="text-align: right; margin-left: 150px; font-weight: bold;">
					<ul>
						<li>Grand Total</li>
						<li>Pembayaran</li>
						<li>Kembalian</li>
					</ul>
				</div>
				<div class="center" style="text-align: right; margin-left: 10px;">
					<ul>
						<li>Rp.</li>
						<li>Rp.</li>
						<li>Rp.</li>
					</ul>
				</div>
				<div class="right" style="text-align: right; margin-left: 70px;">
					<ul>
						<li>{{Request::get('total')}}</li>
						<li>{{Request::get('bayar')}}</li>
						<li>{{Request::get('kembali')}}</li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="footer">
				<h3>Terimakasih</h3>
				<p>Silahkan berkunjung kembali</p>
			</div>
			@endforeach
		</div>
	</div>
</body>
</html>