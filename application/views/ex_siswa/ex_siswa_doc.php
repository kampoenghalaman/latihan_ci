<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Ex_siswa List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Siswa</th>
		<th>Jk</th>
		<th>Kelas</th>
		<th>Indo</th>
		<th>Mtk</th>
		<th>Inggris</th>
		
            </tr><?php
            foreach ($ex_siswa_data as $ex_siswa)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $ex_siswa->nama_siswa ?></td>
		      <td><?php echo $ex_siswa->jk ?></td>
		      <td><?php echo $ex_siswa->kelas ?></td>
		      <td><?php echo $ex_siswa->indo ?></td>
		      <td><?php echo $ex_siswa->mtk ?></td>
		      <td><?php echo $ex_siswa->inggris ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>