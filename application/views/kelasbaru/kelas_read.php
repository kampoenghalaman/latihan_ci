<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Kelas Read</h2>
        <table class="table">
	    <tr><td>Nis</td><td><?php echo $nis; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Semester</td><td><?php echo $semester; ?></td></tr>
	    <tr><td>Statusgambar</td><td><?php echo $statusgambar; ?></td></tr>
	    <tr><td>Namafile</td><td><?php echo $namafile; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kelasbaru') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>