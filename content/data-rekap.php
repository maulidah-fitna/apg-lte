<?php
if(!defined('INDEX')) die();

// $query = "SELECT * FROM data_rekap";
// $result = mysqli_query($con, $query);

$query = "SELECT * FROM data_rekap";
$result = mysqli_query($con, $query);

if (!$result) {
    die("Error dalam mengambil data: " . mysqli_error($con));
}
?>

<div class="container">
    <h2 class="mt-4">Rekap Absensi</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kehadiran</th>
                <th>Kaos Kaki</th>
                <th>Sabuk</th>
                <th>Seragam</th>
                <th>Songkok</th>
                <th>Sepatu</th>
                <th>Hasduk</th>
                <th>Aksi</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; 
            while ($row = $result->fetch_assoc()) { 
                // $nama = (!empty($row['nama_siswa'])) ? htmlspecialchars($row['nama_siswa']) : 'Tidak Ada Data';
                $nama = htmlspecialchars($row['nama_siswa'] ?? 'Tidak Ada Data');
                $kehadiran = htmlspecialchars($row['kehadiran'] ?? '-')
                ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $nama; ?></td>
                    <td><?= $kehadiran; ?></td>
                    <td><?= htmlspecialchars($row['kaos_kaki'] ?? '-'); ?></td>
                    <td><?= htmlspecialchars($row['sabuk'] ?? '-'); ?></td>
                    <td><?= htmlspecialchars($row['seragam'] ?? '-'); ?></td>
                    <td><?= htmlspecialchars($row['songkok'] ?? '-'); ?></td>
                    <td><?= htmlspecialchars($row['sepatu'] ?? '-'); ?></td>
                    <td><?= htmlspecialchars($row['hasduk'] ?? '-'); ?></td>
                    <td>
                        <a href="?hal=data-rekap-edit&nama=<?=$data['nama_siswa']?>" class="btn btn-block btn-warning">Edit</a>
                        <a href="?hal=data-rekap-hapus&nama=<?=$nama?>" class="btn btn-block btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<!-- <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                            <th>Nama</th>
                            <th>Kehadiran</th>
            
                            <th>Kaos Kaki</th>
                            <th>Sabuk</th>
                            <th>Seragam</th>
                            <th>Songkok</th>
                            <th>Sepatu</th>
                            <th>Hasduk</th>
                    </tr>
                    </div>

    </thead> -->
          <!-- /.box -->
          <!-- </div> -->
        <!-- /.col -->
      <!-- </div> -->
      <!-- /.row -->
    <!-- </section> -->

    <?php
    // $kehadiran = isset($row['kehadiran']) ? $row['kehadiran'] : "Tidak Ada Data";
    // $atribut = isset($row['atribut']) ? $row['atribut'] : "Tidak Ada Data";
    // $no = 1;
    
    
    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo "<tr>";
    //     echo "<td>" . $no++ . "</td>";
    //     echo "<td>" . $row['nama_siswa'] . "</td>";
    //     echo "<td>" . htmlspecialchars($kehadiran) . "</td>";
    //     echo "<td>" . htmlspecialchars($atribut) . "</td>";
    //     echo "</tr>";
    // }

    // if($row['atribut'] == "") {
    //     if($kehadiran['hadir']==true) {
    //         $kehadiran['hadir'] = "checked";
    //         $kehadiran['alpa'] = "";
    //         $kehadiran['izin'] = "";
            
    //      }else if($kehadiran['alpa'] == true) {
    //         $kehadiran['hadir'] = "";
    //         $kehadiran['alpa'] = "checked";
    //         $kehadiran['izin'] = "";
    //      }else if($kehadiran['izin'] == true) {
    //         $kehadiran['hadir'] = "";
    //         $kehadiran['alpa'] = "";
    //         $kehadiran['izin'] = "checked";
    //      }
    // }
    ?>
<!-- </table> -->