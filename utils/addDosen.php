<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Css File -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include '../koneksi.php';
global $koneksi;
if (isset($_POST['submit'])) {
    $getUser = $_POST['username'];
    $getNip = $_POST['nip'];
    $getAddress = $_POST['alamat'];

    mysqli_query($koneksi, "INSERT INTO dosenmember VALUES ('', '$getUser', '$getNip', '$getAddress')");
    header("location:../table/dataDosen.php");
}
?>
<div class="add">
    <div class="container">
        <h2>Add Mahasiswa</h2>

        <form class="need-validation" method="post">

            <div class="form-group was-validated">
                <label class="form-label" for="user">Username</label>
                <input class="form-control" type="text" id="user" name="username" required>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="nip">NIP</label>
                <input class="form-control" type="text" id="nip" name="nip" required>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="alamat">Alamat</label>
                <input class="form-control" type="text" id="alamat" name="alamat" required>
            </div>

            <input class="btn btn-success w-100" type="submit" name="submit" value="Add">

        </form>

        <form action="../table/dataMhs.php">
            <input class="btn btn-warning w-100" type="submit" value="Back">
        </form>
    </div>
</div>
</body>
</html>


