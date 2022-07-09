@extends('template.main')
@section('content')
<section class="content">
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Input Data Penjualan</h3>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
			</div>
		</div>
		<!-- /.box-heade -->
		<div class="box-body">
			<form action="{{route('simpan_transaksi')}}" method="POST">
				<div class="row">
					{{csrf_field()}}
					<div class="col-md-6">
						<div class="form-group">
						 	<label>No Penjualan</label>
						 	<input type="text" class="form-control" id="id_penjualan" name="id_penjualan" readonly value="{{$nomat}}" placeholder="">
						</div>
						<div class="form-group">
						 	<label>ID Pembeli</label>
						 	<input type="text" class="form-control" id="id_pembeli" name="id_pembeli" placeholder="Masukkan ID Pembeli" onkeyup="pembeli()">
						</div>
						<div class="form-group">
						 	<label>Nama Pembeli</label>
						 	<input type="text" class="form-control" id="nama" name="nama" readonly>
						</div>
						<div class="form-group">
						 	<label>ID Barang</label>
						 	<input type="text" class="form-control" id="id_barang" name="id_barang" placeholder="Maukkan ID Barang" onkeyup="barang()">
						</div>
						<div class="form-group">
						 	<label>Nama Barang</label>
						 	<input type="text" class="form-control" id="nama_barang" name="nama_barang" readonly>
						</div>
						<div class="form-group">
						 	<label>Harga</label>
						 	<input type="text" class="form-control" id="harga" name="harga" readonly>
						</div>
						<div class="form-group">
						 	<label>Jumlah Beli</label>
						 	<input type="text" class="form-control" id="jumlah_beli" name="jumlah_beli" placeholder="Maukkan Jumlah Beli" onkeyup="jml_beli()">
						</div>
						<div class="form-group">
						 	<label>Sub Total</label>
						 	<input type="text" class="form-control" id="sub_total" name="sub_total" readonly>
						</div>
						<a href="javascript:void(0)" onclick="TambahRow()" class="btn btn-info">Maukkan Barang</a>
					</div>
					<!-- /.col -->
					<div class="col-md-6">
						<br>
						<div class="table-responsive m-t-40">
							<table id="myTable" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Barang</th>
										<th>Harga</th>
										<th>Jumlah Beli</th>
										<th>Sub Total</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="add-row">
									
								</tbody>
							</table>
						</div>

						<div class="form-group">
							<div class="form-group">
						 		<label>Total</label>
						 		<input type="text" class="form-control" id="total" name="total" readonly>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group">
						 		<label>Bayar</label>
						 		<input type="text" class="form-control" id="bayar" name="bayar" placeholder="Maukkan Uang Yang Anda Bayar" onkeyup="kembalian()">
							</div>
						</div>
						<div class="form-group">
							<div class="form-group">
						 		<label>Kembali</label>
						 		<input type="text" class="form-control" id="kembali" name="kembali" readonly>
							</div>
						</div>
						<button class="btn btn-success" onclick="simpan_transaksi()">Simpan Transaksi</button>
						<!-- /.form-group -->
					</div>
					<!-- /.col -->
				</div>
			</form>
			<!-- /.row -->
		</div>
		<!-- /.box-body -->
	</div>
</section>
@endsection
@push('bottom')
<script type="text/javascript">
	function TambahRow(){

		var jumlah = parseInt($('#jumlah_beli').val())
		var jumlah_pinjam =parseInt($('#jumlah_beli').val())
		if (jumlah_pinjam>jumlah) {
			alert('Stok data tidak mencukupi untuk di pinjam')
			$('#jumlah_beli').val('')
		}else{
			val = $('#nama_barang').val()
			if (val=='') {
				alert('data kosong')
			}else{
				i = 1;
					elem =  '<tr>'+
								'<td>'+i+'<input type="hidden" name="dt_id_barang[]" id="dt_id_barang" value="'+$('#id_barang').val()+'"></td>'+
								'<td>'+$('#nama_barang').val()+'<input type="hidden" value="'+$('#jumlah_beli').val()+'" name="dt_jumlah_beli[]" id="dt_jumlah_beli"></td>'+
								'<td>'+$('#harga').val()+'<input type="hidden" name="dt_harga[]" id="dt_harga" value="'+$('#harga').val()+'"></td>'+
								'<td>'+$('#jumlah_beli').val()+'</td>'+
								'<td>'+$('#sub_total').val()+'<input type="hidden" name="dt_sub_total[]" id="dt_sub_total" value="'+$('#sub_total').val()+'"></td>'+

								'<td>'+
									'<a href="javascript:void(0)" onclick="Delete(this)" class="btn btn-danger btn-sm">Hapus</td>'+
								'</td>'+
							'</tr>'
					$('#add-row').append(elem);

					totsb=0;
					sbt=$("#sub_total").val();
					var table =document.getElementById("add-row");
					for(var t=0;t<table.rows.length;t++) {
						totsb=parseInt(totsb)+parseInt(table.rows[t].cells[4].innerHTML);
					}
					$("#total").val(totsb);

					Clean();
					i=i+1;
			}
		}
	}

	function pembeli(){
		iddd = $("#id_pembeli").val()
		if (iddd==''){
			$('#nama').val('');
		}
		$.ajax({
			url:"{{route('pembeli/cari')}}",
			type:"GET",
			dataType:"json",
			data:{
				id:$("#id_pembeli").val()
			},
			success:function(hasil){
				if (hasil.val==0) {
					// alret('Data tidak di temukan');
					$('#nama').val('');

				}else if(hasil.val==2){
					// alret('Data tidak di temukan 2');
					$('#nama').val('');
				}else{
					// alret('Data tidak di temukan 3');
					$('#nama').val(hasil.data.nama);
				}
			}
		});
	}

	function barang(){
		iddd = $("#id_barang").val()
		if (iddd==''){
			$('#nama_barang').val('');
			$('#harga').val('');
		}
		$.ajax({
			url:"{{route('barang/carii')}}",
			type:"GET",
			dataType:"json",
			data:{
				id:$("#id_barang").val()
			},
			success:function(hasil){
				if (hasil.val==0) {
					// alret('Data tidak di temukan');
					$('#nama_barang').val('');
					$('#harga').val('');

				}else if(hasil.val==2){
					// alret('Data tidak di temukan 2');
					$('#nama_barang').val('');
					$('#harga').val('');
				}else{
					// alret('Data tidak di temukan 3');
					$('#nama_barang').val(hasil.data.nama_barang);
					$('#harga').val(hasil.data.harga);
				}
			}
		});
	}

	function jml_beli(){
		hrg=document.getElementById('harga').value;
		jml=document.getElementById('jumlah_beli').value;
		total= hrg*jml;
		document.getElementById('sub_total').value=total;
	}

	function kembalian(){
		var total=document.getElementById('total').value;
		var bayar=document.getElementById('bayar').value;
		var kembali=bayar-total;
		document.getElementById('kembali').value=kembali;
	}

	function Delete(e){
		$(e).parent().parent().remove()
	}

	function Clean(){
		$('#id_barang').val('')
		$('#nama_barang').val('')
		$('#harga').val('')
		$('#jumlah_beli').val('')
	}
	
</script>
@endpush