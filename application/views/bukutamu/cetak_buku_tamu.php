<!DOCTYPE html>
<html>
<head>
    <title>Cetak Buku Tamu</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap/css/custom-button.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome/css/all.css">

<script>
		window.print();
	</script>
</head>

<body>
    <h1>Data Buku Tamu</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>jenis kemamin</th>
                <th>alamat</th>
                <th>instansi</th>
                <th>No Hp</th>
                <th>Keperluan</th>
                <th>email_tamu</th>
                <th>keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bukutamu as $row): ?>
            <tr>
                <td><?php echo $row->id_bukutamu; ?></td>
                <td><?php echo $row->nama_tamu; ?></td>
                <td><?php echo $row->jk; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td><?php echo $row->instansi; ?></td>
                <td><?php echo $row->no_hp; ?></td>
                <td><?php echo $row->keperluan; ?></td>
                <td><?php echo $row->email_tamu; ?></td>
                <td><?php echo $row->keterangan; ?></td>
       
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
