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
        <h2 style="margin-top:0px">Ex_siswa <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Siswa <?php echo form_error('nama_siswa') ?></label>
            <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa" value="<?php echo $nama_siswa; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jk <?php echo form_error('jk') ?></label>
            <input type="text" class="form-control" name="jk" id="jk" placeholder="Jk" value="<?php echo $jk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kelas <?php echo form_error('kelas') ?></label>
            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="<?php echo $kelas; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Indo <?php echo form_error('indo') ?></label>
            <input type="text" class="form-control" name="indo" id="indo" placeholder="Indo" value="<?php echo $indo; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Mtk <?php echo form_error('mtk') ?></label>
            <input type="text" class="form-control" name="mtk" id="mtk" placeholder="Mtk" value="<?php echo $mtk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Inggris <?php echo form_error('inggris') ?></label>
            <input type="text" class="form-control" name="inggris" id="inggris" placeholder="Inggris" value="<?php echo $inggris; ?>" />
        </div>
	    <input type="hidden" name="id_siswa" value="<?php echo $id_siswa; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('ex_siswa') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>