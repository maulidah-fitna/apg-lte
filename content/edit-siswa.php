<?php
if(!defined('INDEX')) die();

$nis = $_GET['nis'];
$query = "SELECT * FROM data_siswa WHERE nis = '$nis'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
?>

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah Siswa</h3>
    </div>

<form action="?hal=siswa-update" method="post" enctype="multipart/form-data">
<div class="box-body">
    <!-- Input ID -->
     <input type="hidden" name="nis" value="<?=$data['nis']?>"><br>

    <!-- Input Nama -->
    <div class="form-group">
                <label for="nama_siswa" class="col-sm-2 control-label">Nama Siswa</label>
                <div class="col-sm-10">
            <input type="text" name="nama_siswa" id="nama" class="form-control" value="<?=$data['nama_siswa']?>"><br>
        </div>
     </div>

<!-- Input Kelas -->
<div class="form-group">
                <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                <div class="col-sm-10">
                    <select name="kelas" id="kelas" class="form-control" required><br>
                <option value=""> - Pilih Kelas - </option>

<?php
$queryj = "SELECT * FROM data_siswa ";
$resultj = mysqli_query($con, $queryj);
while($j = mysqli_fetch_assoc($resultj)) {
    echo "<option value='$j[nis]'";
    if($j['nis'] == $data['nis']) echo " selected";
    echo "> $j[kelas] </option>";
}
?>
            </select>
        </div>
     </div>
<!-- Input Jurusan -->
<div class="form-group">
                <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
                <div class="col-sm-10">
                    <select name="jurusan" id="jurusan" class="form-control" required>
                <option value=""> - Pilih Jurusan - </option>

<?php
$queryj = "SELECT * FROM data_siswa ";
$resultj = mysqli_query($con, $queryj);
while($j = mysqli_fetch_assoc($resultj)) {
    echo "<option value='$j[nis]'";
    if($j['nis'] == $data['nis']) echo " selected";
    echo "> $j[jurusan] </option>";
}
?>
            </select>
        </div>
     </div>

    <!-- Input Gender -->
    <div class="form-group">
                <label for="gender" class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-10"><br>

    <!-- Pengecekan Gender -->
     <?php
     if($data['gender']=="l") {
        $l = "checked";
        $p = "";
     }else{
        $l = "";
        $p = "checked";
     }
     ?>

     <input type="radio" name="gender" id="gender" value="l"<?= $l ?> > Laki-Laki
     <input type="radio" name="gender" id="gender" value = "p"<?= $p ?> > Perempuan
     </div>

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
</div>
</form>