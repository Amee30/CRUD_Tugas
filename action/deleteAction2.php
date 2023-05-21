<?php
include '../koneksi.php';
global $koneksi;
if (isset($_GET['delete'])) {
    $getId = $_GET['delete'];

    $sql = "DELETE FROM dosenmember WHERE id = $getId";
    $koneksi -> query($sql);

}
header("location:../table/dataDosen.php");
exit;
