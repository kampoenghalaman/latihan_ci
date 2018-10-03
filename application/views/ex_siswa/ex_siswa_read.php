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
        <h2 style="margin-top:0px">Ex_siswa Read</h2>
        <table class="table">
	    <tr><td>Nama Siswa</td><td><?php echo $nama_siswa; ?></td></tr>
	    <tr><td>Jk</td><td><?php echo $jk; ?></td></tr>
	    <tr><td>Kelas</td><td><?php echo $kelas; ?></td></tr>
	    <tr><td>Indo</td><td><?php echo $indo; ?></td></tr>
	    <tr><td>Mtk</td><td><?php echo $mtk; ?></td></tr>
	    <tr><td>Inggris</td><td><?php echo $inggris; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('ex_siswa') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>