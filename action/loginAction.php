<?php
include "../koneksi.php";
function login(){
global $koneksi;

$getUser = $_POST['username'];
$getPass = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM usermember WHERE usertable ='$getUser' AND passtable ='$getPass'");
$check = mysqli_num_rows($data);

if ($check > 0) {
    session_start();
    $_SESSION['usertable'] = $getUser;
    header("location:../utils/login.php?pesan=berhasil");
}
else {
    header("location:../utils/login.php?pesan=gagal");
}
return $data;
}
