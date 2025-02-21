<?php

$host = "apaasiwe_";
$user = "apaasiwe_";
$pass = "eYQerVXcrhMe9YfZjd3d";
$db = "appasi";

$con = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal! : ".mysqli_connect_error();
}
?>
