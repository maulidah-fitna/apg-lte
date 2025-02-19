<head>
<!-- <link rel="stylesheet" href="style-btn.css"> -->
</head>
<?php
// $j = $_GET['j'];
// $k = $_GET['k'];
// $g = $_GET['g']

$j = htmlspecialchars($_GET['j'] ?? '');
$k = htmlspecialchars($_GET['k'] ?? '');
$g = htmlspecialchars($_GET['g'] ?? '');
?>

<button class="btn  btn-primary" onclick="goBack()">Kembali</button> 
            <script>
        // Fungsi untuk kembali ke halaman sebelumnya
        function goBack() {
            window.history.back();
        }
    </script>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="dataTables_length" id="example1_length">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Absensi</h3>
            </div>
            <!-- /.box-header -->

            <!-- <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                        </span>
                </div>
            </form> -->



            <form action="?hal=data-absen-insert" method="post">
             <div class="box-body">
              <div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="overflow auto">
              <table id="example2" class="table table-bordered table-hover table-responsive table-sm table-stripped">
                <?php
                if($_GET['g']=='l') {
                    $no = 1;
                ?>
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Hadir</th>
                    <th>Alpa</th>
                    <th>Izin</th>
                                    
                    <th>Kaos Kaki</th>
                    <th>Sabuk</th>
                    <th>Seragam</th>
                    <th>Songkok</th>
                    <th>Sepatu</th>
                    <th>Hasduk</th>
                </thead>
                <tbody>
                
                <?php
                        $query = "SELECT * FROM data_siswa WHERE kelas='$k' && jurusan='$j' && gender='$g'";
                        // $query .= "LEFT JOIN data-absen ";
                        // $query .= "ON pegawai.id_jabatan = jabatan.id_jabatan ";
                        // $query .= "ORDER BY pegawai.id_jabatan DESC";
                        $result = mysqli_query($con, $query);
                        $no = 0;

                        while($data = mysqli_fetch_assoc($result)) {
                            $no++;
                        ?>

                <!-- <tr>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>-</td>
                  <td>-</td>
                  <td>U</td>
                </tr> -->

                <!-- <tr>
                                <td><?=$no?></td>
                                <td><?=$data['nama_siswa']?></td>
                                <td><input type="radio" name="kehadiran[ <?= $no ?> ]" value="hadir"></td>
                                <td><input type="radio" name="kehadiran[ <?= $no ?> ]" value="alpa"></td>
                                <td><input type="radio" name="kehadiran[ <?= $no ?> ]" value="izin"></td>                                
                                
                                <td><input type="checkbox" name="kaos-kaki" checked></td>
                                <td><input type="checkbox" name="sabuk" checked></td>
                                <td><input type="checkbox" name="seragam" checked></td>
                                <td><input type="checkbox" name="songkok" checked></td>
                                <td><input type="checkbox" name="sepatu" checked></td>
                                <td><input type="checkbox" name="hasduk" checked></td>
                            </tr> -->
                            <tr>
    <td><?= $no ?></td>
    <td><?= $data['nama_siswa'] ?>
        <input type="hidden" name="nama_siswa[<?= $no ?>]" value="<?= $data['nama_siswa'] ?>">
    </td>
    <td><input type="radio" name="kehadiran[<?= $no ?>]" value="hadir"></td>
    <td><input type="radio" name="kehadiran[<?= $no ?>]" value="alpa"></td>
    <td><input type="radio" name="kehadiran[<?= $no ?>]" value="izin"></td>
    <td><input type="checkbox" name="atribut[<?= $no ?>][]" value="kaos_kaki" checked></td>
    <td><input type="checkbox" name="atribut[<?= $no ?>][]" value="seragam" checked></td>
    <td><input type="checkbox" name="atribut[<?= $no ?>][]" value="sepatu" checked></td>
    <td><input type="checkbox" name="atribut[<?= $no ?>][]" value="hasduk" checked></td>
</tr>

<?php
    }
}else{
    $no = 1;
?>

<thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Hadir</th>
                    <th>Alpa</th>
                    <th>Izin</th>
                                    
                    <th>Kaos Kaki</th>
                    <th>Seragam</th>
                    <th>Sepatu</th>
                    <th>Hasduk</th>
                    <th>Pin</th>
                </thead>
                <tbody>
                
                <?php
                        $query = "SELECT * FROM data_siswa WHERE kelas='$k' && jurusan='$j' && gender='$g'";
                        // $query .= "LEFT JOIN data-absen ";
                        // $query .= "ON pegawai.id_jabatan = jabatan.id_jabatan ";
                        // $query .= "ORDER BY pegawai.id_jabatan DESC";
                        $result = mysqli_query($con, $query);
                        $no = 0;

                        while($data = mysqli_fetch_assoc($result)) {
                            $no++;
                        ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $data['nama_siswa'] ?></td>
            <td><input type="radio" name="kehadiran[ <?= $no ?> ]" value="hadir"></td>
            <td><input type="radio" name="kehadiran[ <?= $no ?> ]" value="alpa"></td>
            <td><input type="radio" name="kehadiran[ <?= $no ?> ]" value="izin"></td>

            <td><input type="checkbox" name="atribut[ <?= $no ?> ][]" value="kaos-kaki" checked></td>
            <td><input type="checkbox" name="atribut[ <?= $no ?> ][]" value="seragam" checked></td>
            <td><input type="checkbox" name="atribut[ <?= $no ?> ][]" value="sepatu" checked></td>
            <td><input type="checkbox" name="atribut[ <?= $no ?> ][]" value="hasduk" checked></td>
            <td><input type="checkbox" name="atribut[ <?= $no ?> ][]" value="pin" checked></td>
        </tr>

<?php
}
}
?>
                </tbody>
                

                
              </table>
</div>
              <input type="submit" name ="submit" value="Simpan">
              
            </form>
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>






            <?php
                    // if($_GET['g']=='p') { ?>
                    <!-- //  <td><input type="checkbox" name="atribut[ <?= $no ?> ][]" value="hasduk" checked></td> -->
                     <?php    
                    // }
                    ?>
