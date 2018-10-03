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
        <h2>Kelas List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nis</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Semester</th>
		<th>Statusgambar</th>
		<th>Namafile</th>
		
            </tr><?php
            foreach ($kelasbaru_data as $kelasbaru)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $kelasbaru->nis ?></td>
		      <td><?php echo $kelasbaru->nama ?></td>
		      <td><?php echo $kelasbaru->alamat ?></td>
		      <td><?php echo $kelasbaru->semester ?></td>
		      <td><?php echo $kelasbaru->statusgambar ?></td>
		      <td><?php echo $kelasbaru->namafile ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>