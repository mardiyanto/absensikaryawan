
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>bukutamu Read</h3>
        <table class="table table-bordered">
	    <tr><td>Name</td><td><?php echo $nama_tamu; ?></td></tr>
	    <tr><td>jenis kelamin</td><td><?php echo $jk; ?></td></tr>
	    <tr><td>alamat lengkap</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Asal Instansi</td><td><?php echo $instansi; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email_tamu; ?></td></tr>
        <tr><td>No HP/WA</td><td><?php echo $no_hp; ?></td></tr>
        <tr><td>Keperluan</td><td><?php echo $keperluan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('bukutamu') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->