<head>
    <!-- <link rel="stylesheet" href="style-tambah-user.css"> -->
</head>

<!-- <div class="dashboard"> -->
    <!-- Notifikasi muncul di sini (di depan form) -->
    <!-- <div id="notification" class="notification"></div>


    <div class="header">Tambah User OSIS</div>
    <div class="container">
      <h2>Form Tambah User</h2>
      <form action="?hal=user-insert" id="userForm" method="post">
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama</label>
          <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
        </div>
        <div class="form-group">
          <label for="kelas" class="col-sm-2 control-label">Kelas</label>
          <input type="text" id="kelas" name="kelas" placeholder="Masukkan kelas" required>
        </div>
        <div class="form-group">
          <label for="osis_divisi" class="col-sm-2 control-label">Divisi OSIS</label>
          <input type="text" id="osis_divisi" name="osis_divisi" placeholder="Masukkan Divisi OSIS" required>
        </div>
        <div class="form-group">
          <label for="username" class="col-sm-2 control-label">Username Baru</label>
          <input type="text" id="username" name="username" placeholder="Masukkan Username Baru" required>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password Baru</label>
          <input type="text" id="password" name="password" placeholder="Masukkan Password Baru" required>
        </div>
        <div class="btn-container">
          <button class="btn" onclick="goBack()">Batal</button>
          <input type="submit" class="btn"></button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function goBack() {
      window.history.back();
    };

    function tambahUser() {
          Ambil nilai dari setiap input field
        const nama = document.getElementById("nama").value.trim();
        const kelas = document.getElementById("kelas").value.trim();
        const osisDivisi = document.getElementById("osis_divisi").value.trim();
        const username = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value.trim();
  
        Pastikan semua field telah diisi
        if (nama && kelas && osisDivisi && username && password) {
          Buat konten notifikasi dengan pesan dan data
          const notificationContent = `
            <p>User berhasil ditambahkan!</p>
            <p><strong>Nama:</strong> ${nama}</p>
            <p><strong>Kelas:</strong> ${kelas}</p>
            <p><strong>Osis Divisi:</strong> ${osisDivisi}</p>
            <p><strong>Osis Divisi:</strong> ${username}</p>
            <p><strong>Osis Divisi:</strong> ${passwrod}</p>
          `; -->
          <!-- // Tampilkan notifikasi di depan form
          const notif = document.getElementById("notification");
          notif.innerHTML = notificationContent;
          notif.style.display = "block";
  
          Sembunyikan notifikasi setelah 3 detik
          setTimeout(function() {
            notif.style.display = "none";
          }, 3000);
  
          Reset form setelah berhasil menyimpan
          document.getElementById("userForm").reset();
        } else {
          alert("Harap isi semua field!");
        }else{
        echo "Tidak Dapat Menyimpan Data!<br>";
        echo mysqli_error();
      }  
    } -->
    
<!-- </script>




<!-- <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Siswa</h3>
            </div> -->
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form action="?hal=siswa-insert" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="nis" class="col-sm-2 control-label">NIS</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nis" name="nis" placeholder="nis">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_siswa" class="col-sm-2 control-label">Nama Siswa</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kelas" class="col-sm-2 control-label">Kelas</label> -->

                  <!-- <div class="col-sm-10"> -->
                  <!-- <div class="input"> -->
            <!-- <select name="kelas" id="kelas" class="form-control" required>
            <option value=""> - Pilih Kelas - </option>
            <option value="10"> 10 </option>
            <option value="11"> 11 </option>
            <option value="12"> 12 </option>

</select>
</div>
<div class="form-group">
<label for="jurusan" class="col-sm-2 control-label">Jurusan</label>

<select name="jurusan" id="jurusan" class="form-control" required>
            <option value=""> - Pilih Jurusan - </option>
            <option value="RPL"> RPL </option>
            <option value="PBS"> PBS </option>
</select>
</div>
<div class="form-group">
        <label for="jk" class="col-sm-2 control-label">Jenis Kelamin</label>
        <input type="radio" name="gender" id="jk" value="l" required> Laki-Laki  
        <input type="radio" name="gender" id="jk" value="p" required> Perempuan
    </div>
</div>

 -->
 <!-- </div> -->
                    
                  
                <!-- <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div> -->
              <!-- </div> -->
              <!-- /.box-body -->
              <!-- <div class="box-footer">
                <button class="btn btn-default button-back" onclick="goBack()">Cancel</button>
                <script>
                      function goBack() {
                        window.history.back();
                      }
                </script>
                <input type="submit" value="Simpan" class="btn btn-default">
              </div> -->
              <!-- /.box-footer -->
            <!-- </form>
          </div> -->


          <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah Siswa</h3>
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

            <!-- Kelas -->
            <div class="form-group">
                <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                <div class="col-sm-10">
                    <select name="kelas" id="kelas" class="form-control" required>
                        <option value="">- Pilih Kelas -</option>
                        <option value="10 PPLG">10 PPLG</option>
                        <option value="10 AKL">10 AKL</option>
                        <option value="11 RPL">11 RPL</option>
                        <option value="11 LPS">11 LPS</option>
                        <option value="12 RPL">12 RPL</option>
                        <option value="12 PBS">12 PBS</option>
                    </select>
                </div>
            </div>

            <!-- email -->
            <div class="form-group">
                <label for="nis" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                </div>
            </div>

            <!-- password -->
            <div class="form-group">
                <label for="nis" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                </div>
            </div>

            <!-- Kelas -->
            <div class="form-group">
                <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                <div class="col-sm-10">
                    <select name="osis_divisi" id="osis_divisi" class="form-control" required>
                        <option value="">- Pilih Jabatan Osis -</option>
                        <option value="Ketua">Ketua</option>
                        <option value="Wakil">Wakil</option>
                        <option value="Sekretaris">Sekretaris</option>
                        <option value="Bendahara">Bendahara</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Keamanan">Keamanan</option>
                        <option value="Perlengkapan">Perlengkapan</option>
                        <option value="Bisnis Kreatif">Bsnif Kreatif</option>
                    </select>
                </div>
            </div>

        </div>
        <!-- /.box-body -->

        <!-- Tombol Submit -->
        <div class="box-footer">
            <button type="button" class="btn btn-default button-back" onclick="goBack()">Batal</button>
            <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
        <!-- /.box-footer -->
    </form>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>
