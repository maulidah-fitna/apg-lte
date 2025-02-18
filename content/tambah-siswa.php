<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="?hal=siswa-insert" method="post" class="form-horizontal" enctype="multipart/form-data">
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
                  <label for="kelas" class="col-sm-2 control-label">Kelas</label>

                  <!-- <div class="col-sm-10"> -->
                  <!-- <div class="input"> -->
            <select name="kelas" id="kelas" class="form-control" required>
            <option value=""> - Pilih Kelas - </option>
            <option value=""> 10 </option>
            <option value=""> 11 </option>
            <option value=""> 12 </option>

</select>
</div>
<div class="form-group">
<label for="jurusan" class="col-sm-2 control-label">Jurusan</label>

<select name="jurusan" id="jurusan" class="form-control" required>
            <option value=""> - Pilih Jurusan - </option>
            <option value=""> RPL </option>
            <option value=""> PBS </option>
</select>
</div>
<div class="form-group">
        <label for="jk" class="col-sm-2 control-label">Jenis Kelamin</label>
        <input type="radio" name="gender" id="jk" value="l" required> Laki-Laki  
        <input type="radio" name="gender" id="jk" value="p" required> Perempuan
    </div>
</div>


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
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default button-back" onclick="goBack()">Cancel</button>
                <script>
                      function goBack() {
                        window.history.back();
                      }
                </script>
                <input type="submit" value="Simpan" class="btn btn-default">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>