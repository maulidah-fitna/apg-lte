
<?php
// include "../library/config.php"

if(!defined('INDEX')) die("");

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Absen</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
    <link rel="stylesheet" href="../style-xpplgpa.css">
</head>
<body>
    
    <div class="main-content">
        <div class="header">
            <div>kelas <b><span id="current-class">X AKL Putra</span></b> 👋</div>
            <!-- Memindahkan tombol pilih kelas ke sini dan menggantinya dengan dropdown -->
            <div class="kelas-select">
                <select onchange="changeClass(this.value)">
                    <option value="X AKL Putra">X AKL Putra</option>
                    <option value="X AKL Putri">X AKL Putri</option>
                    <option value="X RPL putra">X TKJ</option>
                    <option value="X RPL putri">X RPL</option>
                </select>
            </div>
        </div>

        <div class="dashboard">
            <div class="table-container">
                <div class="table">
                    <div class="table-header">Kehadiran dan Kelengkapan</div>
                    <table>
                        <thead>
                            <tr>
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
                            
                            </tr>
                        </thead>
                        <tbody class="tbody">

                        <?php
                        $query = "SELECT * FROM siswa_putra WHERE jurusan='AKL'";
                        // $query .= "LEFT JOIN data-absen ";
                        // $query .= "ON pegawai.id_jabatan = jabatan.id_jabatan ";
                        // $query .= "ORDER BY pegawai.id_jabatan DESC";
                        $result = mysqli_query($con, $query);
                        $no = 0;

                        while($data = mysqli_fetch_assoc($result)) {
                            $no++;
                        ?>

                            <tr>
                                <td><?=$no?></td>
                                <td><?=$data['nama_siswa']?></td>
                                <td><input type="radio"></td>
                                <td><input type="radio"></td>
                                <td><input type="radio"></td>
                                
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                                <td><input type="checkbox" checked></td>
                            </tr>
<?php
    }
?>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="table">
                    <div class="table-header">Kelengkapan Atribut</div>
                    <table>
                        <thead>

                        </thead>
                        <tbody>
                            <tr>

                            </tr>
                            
                        </tbody>
                    </table> -->

                </div>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk mengganti kelas yang dipilih
        function changeClass(className) {
            document.getElementById('current-class').innerText = className;
        }
    </script>

<!-- <section class="main">
        <?php include "../konten.php" ?>
    </section>
 -->

</body>
</html>

