<!DOCTYPE html>
<html>
<head>
	<title>Test Builder Class</title>
</head>
<body>
	<center><h1>Test Builder Class</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Semester</th>
			<th>Status</th>
			<th>Action  <a href="<?php echo base_url("kelas/tambahdata")?>"><img src="<?php echo base_url('gambar/add.ico')?>" alt="add" height="16" width="16"></a></th>
		</tr>
		<?php 
		$no = 1;
		foreach($kelas as $data_kelas){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $data_kelas->nis ?></td>
			<td><?php echo $data_kelas->nama ?></td>
			<td><?php echo $data_kelas->alamat ?></td>
			<td><?php echo $data_kelas->semester ?></td>
			<?php if($data_kelas->statusgambar == 0){ ?>
			<td><?php echo "Belum Upload";?></td>
			<td><?php echo anchor("kelas/simulasi/".$data_kelas->id_mhs, "Tambah Gambar"); ?> </td>
				<?php }else{ ?>
					<td><?php echo "uploaded"; ?>
					<td><?php echo anchor("kelas/simulasi/".$data_kelas->id_mhs, "Lihat Data"); ?></td>
				<?php }  ?>
			
		</tr>
		<?php } ?>
		<!-- <tr>
			<td colspan="7" align="center"><?php echo anchor("testpdf/", "Download Laporan"); ?></td>
		</tr> -->
	</table>
</body>
</html>