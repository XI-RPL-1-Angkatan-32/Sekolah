<?php
$koneksi = mysqli_connect("localhost", "root", "", "cafe");
if($koneksi) {
    echo "Database terhubung";
} else {
    echo "Database tidak terhubung";
}
?>