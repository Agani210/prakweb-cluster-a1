<?php
include 'penghubung.php';
$id = $_GET["id"];

    $query       = "DELETE FROM mahasiswa WHERE nrp='$id' ";
    $hasil_query = mysqli_query($connect, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_error($connect).
       " - ".mysqli_error($connect));
    } else {
      echo "<script>alert('Data dihapus!');window.location='index.php';</script>";
    }