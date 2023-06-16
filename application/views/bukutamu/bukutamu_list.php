<style>
    table,
    th,
    tr {
        text-align: center;
    }

    .swal2-popup {
        font-family: inherit;
        font-size: 1.2rem;
    }
</style>
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-primary'>
                <div class='box-header with-border'>
                    <h3 class='box-title'>MANU MANAGEMENT</h3>
  
                </div><!-- /.box-header -->
                <div class='box-body'>
                    <table id="mytable" class="table table-bordered table-hover display" style="width:100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Tamu</th>
                                <th>Jenis Kelami</th>
                                <th>No Hp</th>
                                <th>Email</th>
                                <th>Asal Instansi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($bukutamu_data as $bukutamu) {
        
                                ?>
                            <tr>
                                <td><?php echo ++$start ?></td>
                                <td><?php echo $bukutamu->nama_tamu ?></td>
                                <td><?php echo $bukutamu->jk ?></td>
                                <td><?php echo $bukutamu->no_hp ?></td>
                                <td><?php echo $bukutamu->email_tamu ?></td>
                                <td><?php echo $bukutamu->instansi ?></td>
                                <td><?php
                                        echo anchor(site_url('bukutamu/read/' . $bukutamu->id_bukutamu), '<i class="fa fa-eye fa-lg"></i>&nbsp;&nbsp;Lihat', array('title' => 'detail', 'class' => 'btn btn-md btn-success btn3d'));
                                     ?>
                                </td>
                            </tr> <?php }  ?>
                        </tbody>
                    </table>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#mytable")
                                .addClass('nowrap')
                                .dataTable({
                                    responsive: true,
                                    colReorder: true,
                                    fixedHeader: true,
                                    columnDefs: [{
                                        targets: [-1, -3],
                                        className: 'dt-responsive'
                                    }]
                                });
                        });
                    </script>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->