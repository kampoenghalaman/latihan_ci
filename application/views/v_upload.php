<html>
<head>
	<title>upload file codeigniter</title>
</head>
<body>
	<center><h1>Latihan Upload File Codeigniter</h1></center>
	<?php echo $error;?>
	<?php echo form_open_multipart('Uploadgambar/aksi_upload');?>
		<!-- <form action="" enctype="multipart/form-data"> -->
		<input type="file" name="berkas" />
		<br /><br />
		<input type="submit" value="upload" />
	</form>
</body>
</html>