
<?php
if (!defined('INDEX')) die();

$j = htmlspecialchars($_GET['j'] ?? '');
$k = $_GET['k'] ?? '';
$g = htmlspecialchars($_GET['g'] ?? '');
?>

<<<<<<< HEAD
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
                            <input type="text" class="form-control" id="kelas" name="kelas" required>
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
                <h2 class="mt-4">Rekap Absensi <?php if (isset($_POST['tanggal'])) {
                echo "Tanggal " . date('d/m/Y', strtotime($_POST['tanggal']));
            }?></h2>
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
                                
                                $query = "SELECT * FROM data_rekap WHERE DATE(tanggal_input) = '$tanggal' && kelas = '$kelas' && jurusan = '$jurusan'";
                                $result = mysqli_query($con, $query);
                                $no = 1;
                                var_dump($result);
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

=======
<div class="container">
<div class="box">
<div class="box-header">
    <h2 class="mt-4">Rekap Absensi</h2>
    <div class="box-body">
    <table id="tabelrekap" class="table table-bordered table-striped">

        <thead>
            <tr>
                
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kehadiran</th>
                <th>Kaos Kaki</th>
                <th>Sabuk</th>
                <th>Seragam</th>
                <th>Sepatu</th>
                <th>Hasduk</th>
                <th>Tanggal Input</th>
                <th>Aksi</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; 
            while ($row = $result->fetch_assoc()) { 
                $id = htmlspecialchars($row['id'] ?? '-');
                $nama = htmlspecialchars($row['nama_siswa'] ?? 'Tidak Ada Data');
                $kehadiran = htmlspecialchars($row['kehadiran'] ?? '-')

                ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $nama; ?>
                    </td>
                    <td><?= $kehadiran; ?></td>
                    <td><?= htmlspecialchars($row['kaos_kaki'] ?? '-'); ?></td>
                    <td><?= htmlspecialchars($row['sabuk'] ?? '-'); ?></td>
                    <td><?= htmlspecialchars($row['seragam'] ?? '-'); ?></td>
                    <td><?= htmlspecialchars($row['sepatu'] ?? '-'); ?></td>
                    <td><?= htmlspecialchars($row['hasduk'] ?? '-'); ?></td>
                    <td><?=htmlspecialchars($row['tanggal_input'] ?? '-')?></td>


                    <td>
                        <a href="?hal=data-rekap-hapus&id=<?=$row['id']?>" class="btn btn-block btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php 
            }
            

?>
        </tbody>
       
    </table>
    </div>
        </div>
        </div>
</div>
>>>>>>> f1574f1fd2edf685589ef5327306eb307af1562e
<?php
// $sql_move = "INSERT INTO rekap_tahunan (nama_siswa, kehadiran, kaos_kaki, sabuk, seragam, sepatu, hasduk, atribut, tanggal_input)
// SELECT nama_siswa, kehadiran, kaos_kaki, sabuk, seragam, sepatu, hasduk, atribut, tanggal_input 
// FROM data_rekap 
// WHERE tanggal_input < NOW() - INTERVAL 1 DAY";
<<<<<<< HEAD
=======

>>>>>>> f1574f1fd2edf685589ef5327306eb307af1562e
// $con->query($sql_move);

// $sql_delete = "DELETE FROM data_rekap WHERE tanggal_input < NOW() - INTERVAL 1 DAY";
// $con->query($sql_delete);
<<<<<<< HEAD
?>
=======
?>
>>>>>>> f1574f1fd2edf685589ef5327306eb307af1562e
