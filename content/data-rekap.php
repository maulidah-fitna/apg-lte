<?php
if(!defined('INDEX')) die();

$j = htmlspecialchars($_GET['j'] ?? '');
$k = htmlspecialchars($_GET['k'] ?? '');
$g = htmlspecialchars($_GET['g'] ?? '');

// $query = "SELECT * FROM data_rekap";
// $result = mysqli_query($con, $query);

$query = "SELECT * FROM data_rekap WHERE DATE(tanggal_input) = CURDATE()";
$result = mysqli_query($con, $query);

if (!$result) {
    die("Error dalam mengambil data: " . mysqli_error($con));
}
?>

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
<?php
// $sql_move = "INSERT INTO rekap_tahunan (nama_siswa, kehadiran, kaos_kaki, sabuk, seragam, sepatu, hasduk, atribut, tanggal_input)
// SELECT nama_siswa, kehadiran, kaos_kaki, sabuk, seragam, sepatu, hasduk, atribut, tanggal_input 
// FROM data_rekap 
// WHERE tanggal_input < NOW() - INTERVAL 1 DAY";

// $con->query($sql_move);

// $sql_delete = "DELETE FROM data_rekap WHERE tanggal_input < NOW() - INTERVAL 1 DAY";
// $con->query($sql_delete);
?>