<?php
if (!defined('INDEX')) die();

$j = htmlspecialchars($_GET['j'] ?? '');
$k = htmlspecialchars($_GET['k'] ?? '');
$g = htmlspecialchars($_GET['g'] ?? '');
?>

<div class="row">
    <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Pilih Kelas</h3>
            </div>
            <form action="" method="post" class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="kelas" name="kelas" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" value="Tampilkan Data" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h2 class="mt-4">Rekap Absensi <?php if(isset($_POST['kelas'])) echo "Kelas ".$_POST['kelas']; if(isset($_POST['jurusan'])) echo " ".$_POST['jurusan']; if (isset($_POST['tanggal'])) echo ", Tanggal " . date('d/m/Y', strtotime($_POST['tanggal'])); ?></h2>
                <div class="box-body table-responsive">
                    <table id="data-rekap" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kehadiran</th>
                                <th>Kaos Kaki</th>
                                <th>Sabuk</th>
                                <th>Seragam</th>
                                <th>Sepatu</th>
                                <th>Hasduk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_POST['tanggal'])) {
                                $tanggal = $_POST['tanggal'];
                                $kelas = $_POST['kelas'];
                                $jurusan = $_POST['jurusan'];
                                $query = "SELECT * FROM data_rekap WHERE DATE(tanggal_input) = '$tanggal' AND kelas = '$kelas' AND jurusan = '$jurusan'";
                                $result = mysqli_query($con, $query);
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($row['nama_siswa'] ?? 'Tidak Ada Data'); ?></td>
                                <td><?= htmlspecialchars($row['kehadiran'] ?? '-'); ?></td>
                                <td><?= htmlspecialchars($row['kaos_kaki'] ?? '-'); ?></td>
                                <td><?= htmlspecialchars($row['sabuk'] ?? '-'); ?></td>
                                <td><?= htmlspecialchars($row['seragam'] ?? '-'); ?></td>
                                <td><?= htmlspecialchars($row['sepatu'] ?? '-'); ?></td>
                                <td><?= htmlspecialchars($row['hasduk'] ?? '-'); ?></td>
                            </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$sql_move = "INSERT INTO rekap_tahunan (nama_siswa, kehadiran, kaos_kaki, sabuk, seragam, sepatu, hasduk, atribut, tanggal_input)
SELECT nama_siswa, kehadiran, kaos_kaki, sabuk, seragam, sepatu, hasduk, atribut, tanggal_input 
FROM data_rekap 
WHERE tanggal_input < NOW() - INTERVAL 1 DAY";
$con->query($sql_move);

$sql_delete = "DELETE FROM data_rekap WHERE tanggal_input < NOW() - INTERVAL 1 DAY";
$con->query($sql_delete);
?>
