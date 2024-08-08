<?php
$koneksi = mysqli_connect("localhost", "root", "", "sekolah");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>