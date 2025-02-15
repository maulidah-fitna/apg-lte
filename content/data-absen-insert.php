<?php
if(!defined('INDEX')) die();

// if(!defined('INDEX')) die("");

// $nama_jabatan = $_POST['nama'];
// $query = "INSERT INTO jabatan SET nama_jabatan = '$nama_jabatan'";
// $result = mysqli_query($con, $query);

// if($result) {
//     echo "Jabatan <b>$nama_jabatan</b> Berhasil Disimpan!";
//     echo "<meta http-equiv='refresh' content='2, url=?hal=jabatan'";
// }else{
//     echo "Tidak Dapat Menyimpan Data!<br>";
//     echo mysqli_error();
// }


// $hadir1 = $_POST['hadir'];
// $hadir2 = $_POST['alpa'];
// $hadir3 = $_POST['izin'];

// $lengkap1 = $_POST['kaos-kaki'];
// $lengkap2 = $_POST['sabuk'];
// $lengkap3 = $_POST['seragam'];
// $lengkap4 = $_POST['songkok'];
// $lengkap5 = $_POST['hasduk'];

// $error = "";

// if()


// if (isset($_POST['submit'])) {
//     $nama_siswa = $_POST['nama_siswa'];
//     $kehadiran = $_POST['kehadiran'];
//     $atribut = isset($_POST['atribut']) ? implode(", ", $_POST['atribut']) : '';

//     $query = "INSERT INTO data_rekap (nama_siswa, kehadiran, atribut) 
//               VALUES ('$nama_siswa', '$kehadiran', '$atribut')";

//     $result = mysqli_query($con, $query);

//     if ($result) {
//         echo "Data berhasil disimpan!";
//         header("Location: data-rekap.php");
//     } else {
//         echo "Error: " . mysqli_error($conn);
//     }
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     foreach ($_POST['kehadiran[]'] as $id_siswa => $kehadiran) {
//         // Ambil atribut (checkbox) yang dipilih untuk siswa ini
//         $atribut = isset($_POST['atribut'][$id_siswa]) ? implode(", ", $_POST['atribut'][$id_siswa]) : "Tidak ada";

//         if (isset($_POST['submit'])) {
//             $nama_siswa = $_POST['nama_siswa'];
//             $kehadiran = $_POST['kehadiran'];
//             $atribut = isset($_POST['atribut']) ? implode(", ", $_POST['atribut']) : '';
        
            // Menggunakan switch untuk validasi atau pengolahan data
        //     switch ($kehadiran) {
        //         case 'hadir':
        //             $status_kehadiran = "Hadir";
        //             break;
        //         case 'alpa':
        //             $status_kehadiran = "Alpa";
        //             break;
        //         case 'izin':
        //             $status_kehadiran = "Izin";
        //             break;
        //         default:
        //             $status_kehadiran = "Tidak diketahui";
        //             break;
        //     }

        // }

//         if($kehadiran['hadir']==true) {
//             $kehadiran['hadir'] = "checked";
//             $kehadiran['alpa'] = "";
//             $kehadiran['izin'] = "";
            
//          }else if($kehadiran['alpa'] == true) {
//             $kehadiran['hadir'] = "";
//             $kehadiran['alpa'] = "checked";
//             $kehadiran['izin'] = "";
//          }else if($kehadiran['izin'] == true) {
//             $kehadiran['hadir'] = "";
//             $kehadiran['alpa'] = "";
//             $kehadiran['izin'] = "checked";
//          }


//         // Query untuk menyimpan ke database
//         $query = "INSERT INTO data_rekap (id_siswa, kehadiran, atribut) 
//                   VALUES ('$id_siswa', '$kehadiran', '$atribut')";

//         // Eksekusi query
//         if (mysqli_query($con, $query)) {
//             echo "Data siswa ID $id_siswa berhasil disimpan.<br>";
//         } else {
//             echo "Error: " . mysqli_error($con);
//         }
//     }
// } //else {
//     echo "Form tidak dikirim dengan metode POST.";
 




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST['kehadiran'] as $id_siswa => $kehadiran) {
        // Ambil atribut (checkbox) yang dipilih untuk siswa ini
        $atribut = isset($_POST['atribut'][$id_siswa]) ? implode(", ", $_POST['atribut'][$id_siswa]) : "Tidak ada";
        
        // Query untuk menyimpan ke database
        $query = "INSERT INTO data_rekap (id, kehadiran, kaos_kaki, sabuk, seragam, songkok, hasduk) VALUES ('$id_siswa', '$kehadiran', '$atribut[ <?= $no ?> ]', '$atribut[ <?= $no ?> ]', '$atribut[ <?= $no ?> ]', '$atribut[ <?= $no ?> ]', '$atribut[ <?= $no ?> ]')";

        // Eksekusi query
        if (mysqli_query($con, $query)) {
            echo "Data siswa ID $id_siswa berhasil disimpan.<br>";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}






// Tutup koneksi
mysqli_close($con);

?>