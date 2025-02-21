          <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah User</h3>
    </div>
    <!-- /.box-header -->
    
    <!-- Form start -->
    <form action="?hal=user-insert" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="box-body">
            <!-- Nama -->
            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
                </div>
            </div>


            <!-- username -->
            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                </div>
            </div>

            <!-- password -->
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required><br>
                    <span class="input-group-append" id="togglePassword" style="cursor: pointer;">
                <span class="input-group-text"><i class="fa fa-eye"></i></span> <!-- Ikon mata di kanan -->
            </span>
                </div>
            </div>
        </div>
        <!-- /.box-body -->

        <!-- Tombol Submit -->
        <div class="box-footer">
            <button type="button" class="btn btn-default" onclick="goBack()">Batal</button>
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
