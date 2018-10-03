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
        <h2 style="margin-top:0px">Kelas <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="char">Nis <?php echo form_error('nis') ?></label>
            <input type="text" class="form-control" name="nis" id="nis" placeholder="Nis" value="<?php echo $nis; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Semester <?php echo form_error('semester') ?></label>
            <input type="text" class="form-control" name="semester" id="semester" placeholder="Semester" value="<?php echo $semester; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Statusgambar <?php echo form_error('statusgambar') ?></label>
            <input type="text" class="form-control" name="statusgambar" id="statusgambar" placeholder="Statusgambar" value="<?php echo $statusgambar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Namafile <?php echo form_error('namafile') ?></label>
            <input type="text" class="form-control" name="namafile" id="namafile" placeholder="Namafile" value="<?php echo $namafile; ?>" />
        </div>
	    <input type="hidden" name="id_mhs" value="<?php echo $id_mhs; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kelasbaru') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>