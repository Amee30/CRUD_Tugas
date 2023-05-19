<?php
include '../koneksi.php';
global $koneksi;
if (isset($_GET['delete'])) {
    $getId = $_GET['delete'];

     $sql = "DELETE FROM mahasiswamember WHERE id = $getId";
     $koneksi -> query($sql);

}
     header("location:../table/dataMhs.php");
    exit;