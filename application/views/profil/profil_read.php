
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Prifil Read</h3>
        <table class="table table-bordered">
	    <tr><td>Nama Instansi</td><td><?php echo $nama_instansi; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email_instansi	; ?></td></tr>
	    <tr><td>Alias</td><td><?php echo $alias; ?></td></tr>
	    <tr><td>No HP</td><td><?php echo $no_hp; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
        <tr><td>Tentang</td><td><?php echo $tentang; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('profil') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->