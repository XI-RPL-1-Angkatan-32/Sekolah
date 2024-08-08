<?php
$nama_ekspertise = $_POST["nama"];

if(empty($nama_ekspertise)) {
    echo "Nama Ekspertise kosong!";
} else {
    //input ke database
    include "koneksi.php";
    $query = mysqli_query($koneksi, "INSERT INTO `ekspertise` (`nama_ekspertise`) VALUES ('$nama_ekspertise');");

    if($query) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Data tidak berhasil ditambahkan";
    }
}
?>