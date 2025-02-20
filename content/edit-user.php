<?php
if(!defined('INDEX')) die();

$id_user = $_GET['id_user'];
$query = "SELECT * FROM user WHERE id_user = '$id_user'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
?>

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Edit User</h3>
    </div>

<form action="?hal=user-update" method="post" enctype="multipart/form-data">
<div class="box-body">
    <!-- Input ID -->
     <input type="hidden" name="id" value="<?=$data['id_user']?>"><br>

    <!-- Input Nama -->
    <div class="form-group">
                <label for="nama_lengkap" class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-10">
            <input type="text" name="nama_lengkap" id="nama" class="form-control" value="<?=$data['nama_lengkap']?>"><br>
        </div>
     </div>
    <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
            <input type="text" name="username" id="username" class="form-control" value="<?=$data['username']?>"><br>
                  
        </div>
     </div>
    <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                <input type="password" name="password" id="password" class="form-control" placeholder="Kosongkan jika tidak ingin mengubah password"><br>            <span class="input-group-append" id="togglePassword" style="cursor: pointer;">
                <span class="input-group-text"><i class="fa fa-eye"></i></span> <!-- Ikon mata di kanan -->
            </span>  
        </div>
     </div>

     <div class="box-footer">
            <button type="button" class="btn btn-default button-back" onclick="goBack()">Batal</button>
            <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
        <!-- /.box-footer -->
    </form>
</div>

<script>
    // Menangani toggle password visibility
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');

    togglePassword.addEventListener('click', function (e) {
        // Toggle password visibility
        const type = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = type;

        // Toggle ikon mata
        this.innerHTML = type === 'password' ? '<i class="fa fa-eye"></i>' : '<i class="fa fa-eye-slash"></i>';
    });

    function goBack() {
        window.history.back();
    }
</script>
</div>
</form>