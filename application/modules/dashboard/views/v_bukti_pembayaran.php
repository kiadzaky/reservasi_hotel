<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

	.style1 {font-size: large}
</style>
</head>
<body>
	<center>
		<table border="0" width="500" cellpadding="7" cellspacing="3">
			<tr>
				<td colspan="2" style="text-align: center; padding-right: 60px;"><strong class="style1">BUKTI PEMBAYARAN</strong></td>

			</tr>
			
			<tr>
				<td class="style1" width="60%"><strong>Reservasi Kode</strong></td>
				<td><strong class="style1">: <?=$bukti_pembayaran['reservasi_kd']?></strong></td>
			</tr>
			<tr>
				<td class="style1"><strong>NIK</strong></td>
				<td><strong class="style1">: <?=$bukti_pembayaran['member_nik']?></strong></td>
			</tr>
			<tr>
				<td class="style1"><strong>Nama</strong></td>
				<td><strong class="style1">: <?=$bukti_pembayaran['member_nama']?></strong></td>
			</tr>
			<tr>
				<td class="style1"><strong>Reservasi Booking</strong></td>
				<td><strong class="style1">: <?=$bukti_pembayaran['reservasi_booking']?></strong></td>
			</tr>
			<tr>
				<td class="style1"><strong>Nomor Kamar</strong></td>
				<td><strong class="style1">: <?=$bukti_pembayaran['kamar_nomor']?></strong></td>
			</tr>
			<tr>
				<td class="style1"><strong>Reservasi Datang</strong></td>
				<td><strong class="style1">: <?=$bukti_pembayaran['reservasi_waktu']?></strong></td>
			</tr>
			<tr>
				<td class="style1"><strong>Reservasi Cek In</strong></td>
				<td><strong class="style1">: <?=$bukti_pembayaran['reservasi_cek_in']?></strong></td>
			</tr>
			<tr>
				<td class="style1"><strong>Reservasi Cek Out</strong></td>
				<td><strong class="style1">: <?=$bukti_pembayaran['reservasi_cek_out']?></strong></td>
			</tr>
			<tr>
				<td class="style1"><strong>Reservasi Cek Out</strong></td>
				<td><strong class="style1">: <?=$bukti_pembayaran['reservasi_cek_out']?></strong></td>
			</tr>
			<tr>
				<td class="style1"><strong>Reservasi Total Bayar</strong></td>
				<td><strong class="style1">: <?=$bukti_pembayaran['reservasi_total_bayar']?></strong></td>
			</tr>
			<tr>
				<td class="style1"><strong>Bank</strong></td>
				<td><strong class="style1">: <?=$bukti_pembayaran['konfirmasi_bank']?></strong></td>
			</tr>
			<tr>
				<td class="style1"><strong>Bukti Pembayaran</strong></td>
				<td><img height="220" width="220" src="<?=base_url('assets/img/')?><?=$bukti_pembayaran['konfirmasi_foto_bukti']?>"></td>
			</tr>
			<tr>
				<td class="style1"><strong>QR CODE</strong></td>
				<td><img height="220" width="220" src="<?=base_url('assets/img/')?><?=$bukti_pembayaran['konfirmasi_foto_qrcode']?>"></td>
			</tr>
			<tr>
				<td><button onclick="cetak()" id="cetak">cetak</button></td>
			</tr>

		</table>
	</center>
</body>
<script type="text/javascript">
	function cetak() {
		var x = document.getElementById('cetak');
		x.style.display = 'none';
		if (window.print()) {
			x.style.display = 'none';
		}
		x.style.display = 'block';
		
	}
</script>
</html>