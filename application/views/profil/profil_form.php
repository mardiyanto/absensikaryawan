<!-- Main content -->

<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-info'>
                <div class='box-header with-border'>
                    <h3 class='box-title'>MENU</h3>
                </div>
                <div class="box-body">
                    <form role="form" id="myForm" data-toggle="validator" action="<?php echo $action; ?>" method="post">
                        <div class="form-group">
                            <label for="name" class="control-label">Nama INSTANSI</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nama_instansi" id="nama_instansi" placeholder="nama_instansi" data-error="Nama  harus diisi" value="<?php echo $nama_instansi; ?>" required />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="control-label">Alamat Lengkap</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat" data-error="alamat harus diisi" value="<?php echo $alamat; ?>" required />
                                <span class="input-group-addon">
                                    <span class="fas fa-external-link-alt"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="control-label">Singkatan</label>
                            <div class="input-group">
                                <input data-placement="bottomRight" name="alias" id="alias" placeholder="alias"  class="form-control icp icp-auto picker-target" value="<?php echo $alias; ?>" type="text" />
                                <span class="input-group-addon">
                                    <span class="fab fa-font-awesome-flag"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="control-label">NO HP</label>
                            <div class="input-group">
                            <input data-placement="bottomRight" name="no_hp" id="no_hp" placeholder="no_hp"  class="form-control icp icp-auto picker-target" value="<?php echo $no_hp; ?>" type="text" />
                                <span class="input-group-addon">
                                    <span class="fas fa-check"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="icon" class="control-label">Tentang</label>
                            <div class="input-group">
                            <input data-placement="bottomRight" name="tentang" id="tentang" placeholder="tentang"  class="form-control icp icp-auto picker-target" value="<?php echo $tentang; ?>" type="text" />
                              
                             <span class="input-group-addon">
                                    <span class="fas fa-grip-vertical"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="email_instansi" class="control-label">email</label>
                            <div class="input-group">
                            <input data-placement="bottomRight" name="email_instansi" id="email_instansi" placeholder="email_instansi"  class="form-control icp icp-auto picker-target" value="<?php echo $email_instansi; ?>" type="email" />
                              
                             <span class="input-group-addon">
                                    <span class="fas fa-grip-vertical"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <input type="hidden" name="id_profil" value="<?php echo $id_profil; ?>" />
                        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                        <a href="<?php echo site_url('profil') ?>" class="btn btn-default">Cancel</a>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->