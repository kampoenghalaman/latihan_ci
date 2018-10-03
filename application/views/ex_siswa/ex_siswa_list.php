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
        <h2 style="margin-top:0px">Ex_siswa List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('ex_siswa/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('ex_siswa/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('ex_siswa'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Siswa</th>
		<th>Jk</th>
		<th>Kelas</th>
		<th>Indo</th>
		<th>Mtk</th>
		<th>Inggris</th>
		<th>Action</th>
            </tr><?php
            foreach ($ex_siswa_data as $ex_siswa)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $ex_siswa->nama_siswa ?></td>
			<td><?php echo $ex_siswa->jk ?></td>
			<td><?php echo $ex_siswa->kelas ?></td>
			<td><?php echo $ex_siswa->indo ?></td>
			<td><?php echo $ex_siswa->mtk ?></td>
			<td><?php echo $ex_siswa->inggris ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('ex_siswa/read/'.$ex_siswa->id_siswa),'Read'); 
				echo ' | '; 
				echo anchor(site_url('ex_siswa/update/'.$ex_siswa->id_siswa),'Update'); 
				echo ' | '; 
				echo anchor(site_url('ex_siswa/delete/'.$ex_siswa->id_siswa),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('ex_siswa/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('ex_siswa/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>