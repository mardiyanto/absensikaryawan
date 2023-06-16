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
                    <div class="pull-right">
                        <?php echo anchor(site_url('profil/create/'), ' <i class="fa fa-plus"></i> &nbsp;&nbsp; Tambah Baru', ' class="btn btn-unique btn-lg btn-create-data btn3d"'); ?>
                    </div>
                </div><!-- /.box-header -->
                <div class='box-body'>
                    <table id="mytable" class="table table-bordered table-hover display" style="width:100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama instansi</th>
                                <th>No Hp</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($data as $data) {
        
                                ?>
                            <tr>
                                <td><?php echo ++$start ?></td>
                                <td><?php echo $data->nama_instansi ?></td>
                                <td><?php echo $data->no_hp ?></td>
                                <td><?php echo $data->email_instansi ?></td>
                                <td> <?php
                                        echo anchor(site_url('profil/read/' . $data->id_profil), '<i class="fa fa-eye fa-lg"></i>&nbsp;&nbsp;Lihat', array('title' => 'detail', 'class' => 'btn btn-md btn-success btn3d'));
                                        echo anchor(site_url('profil/update/' . $data->id_profil), '<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;&nbsp;Edit', array('title' => 'edit', 'class' => 'btn btn-md btn-warning btn-edit-data btn3d'));
                                        echo anchor(site_url('profil/delete/' . $data->id_profil), '<i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Hapus', 'title="delete" class="btn btn-md btn-danger btn-remove-data btn3d"');
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