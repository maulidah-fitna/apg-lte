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
    <form action="?hal=siswa-insert" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="box-body">
            <!-- NIS -->
            <div class="form-group">
                <label for="nis" class="col-sm-2 control-label">NIS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS" required>
                </div>
            </div>

            <!-- Nama Siswa -->
            <div class="form-group">
                <label for="nama_siswa" class="col-sm-2 control-label">Nama Siswa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Masukkan Nama" required>
                </div>
            </div>

            <!-- Kelas -->
            <div class="form-group">
                <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                <div class="col-sm-10">
                    <select name="kelas" id="kelas" class="form-control" required>
                        <option value="">- Pilih Kelas -</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
            </div>

            <!-- Jurusan -->
            <div class="form-group">
                <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
                <div class="col-sm-10">
                    <select name="jurusan" id="jurusan" class="form-control" required>
                        <option value="">- Pilih Jurusan -</option>
                        <option value="PPLG">PPLG</option>
                        <option value="RPL">RPL</option>
                        <option value="AKL">AKL</option>
                        <option value="LPS">LPS</option>
                        <option value="PBS">PBS</option>
                    </select>
                </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="form-group">
                <label for="gender" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <label><input type="radio" name="gender" value="l" required> Laki-Laki</label>
                    <label><input type="radio" name="gender" value="p" required> Perempuan</label>
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
    function goBack() {
        window.history.back();
    }
</script>
