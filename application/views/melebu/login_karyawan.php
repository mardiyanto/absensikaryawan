<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error_msg)){ ?>
        <div><?php echo $error_msg; ?></div>
    <?php } ?>
    <form method="post" action="<?php echo base_url('Auth_karyawan/login'); ?>">
        <input type="text" name="id_karyawan" placeholder="ID Karyawan" required=""><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
