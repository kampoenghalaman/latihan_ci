<!DOCTYPE html>
<html>
<head>
	<title>Tambah Gambar</title>
</head>
<body>
	<center><h1>Simulasi Tambah Gambar</h1></center>

	<?php foreach($data as $datamhsw){ ?>
	<?php //echo $error;?>
	<?php echo form_open_multipart('Kelas/aksi_upload/'.$datamhsw->id_mhs);?>
		<table style="margin:20px auto;">
			<tr>
				<td>NIS</td>
				<td>
					<input type="hidden" name="id_mhs" value="<?php echo $datamhsw->id_mhs ?>">
					<input type="text" name="nama" value="<?php echo $datamhsw->nis ?>" disabled>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $datamhsw->nama ?>"disabled></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $datamhsw->alamat ?>"disabled></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><input type="text" name="semester" value="<?php echo $datamhsw->semester ?>" disabled></td>
			</tr>
			<?php if($datamhsw->statusgambar == 0){?>
			<tr>
				<td colspan="2"><input type="file" name="berkas" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
			<?php }else{?>
			<tr>
				<td colspan="2" align="center">
						<a href="<?php echo base_url().'index.php/kelas/download_gambar/'.$datamhsw ->namafile ?>">
						<img src="<?php echo base_url('gambar/'.$datamhsw ->namafile);?>" height="42" width="42">
						</a>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><a href="<?php echo base_url('index.php/Kelas');?>">Kembali</a></td>
			</tr>
			<?php }?>
			
		</table>
	</form>	
	<?php } ?>
</body>
</html>