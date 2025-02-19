<?php
    // if (!defined('INDEX')) header('location: index.php');

    $halaman = [
        "dashboard",
        "data-absen",
        "data-user",
        "data-absen-insert",
        "data-rekap",
        "pengaturan",
        "tambah-user",
        "user-insert",
        "data-admin",
        "data-siswa",
        "tambah-siswa",
        "siswa-insert",
        "edit-siswa",
        "edit-user",
        "siswa-hapus",
        "siswa-update",
        "siswa-hapus",
        "masukan",
        "xaklpa",
        "xaklpi",
        "xpplgpa",
        "xpplgpi",
        "xirplpa",
        "xirplpi",
        "xilpspa",
        "xilpspi",
        "presensi"
        // "z-coretan"
    ];

    if (isset($_GET['hal'])) {
        $hal = $_GET['hal'];
    }else{
        $hal = 'dashboard';
    }

    foreach($halaman as $h) {
        if ($hal == $h) {
            include "content/$h.php";
            break;
        }
    }

?>