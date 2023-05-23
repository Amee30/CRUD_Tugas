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

$getId = "";
$getUser = "";
$getNip = "";
$getAddress = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET['edit'])) {
        header("location:../table/dataDosen.php");
    }
    $getId = $_GET['edit'];

    $sql = "SELECT * FROM dosenmember WHERE id = $getId";
    $result = $koneksi -> query($sql);
    $row = mysqli_fetch_array($result);

    if (!$row) {
        header("location:../table/dataDosen.php");
        exit();
    }

    $getUser = $row['nama'];
    $getNip = $row['nip'];
    $getAddress = $row['alamat'];
} else {

    $getId = $_POST['id'];
    $getUser = $_POST['username'];
    $getNip = $_POST['nip'];
    $getAddress = $_POST['alamat'];


    $sql = "UPDATE dosenmember SET nama = '$getUser', nip = '$getNip', alamat = '$getAddress' WHERE id = '$getId'";
    $result = $koneksi -> query($sql);
    header("location:../table/dataDosen.php");

}
?>
<div class="add">
    <div class="container">
        <h2>Edit Mahasiswa</h2>

        <form class="need-validation" method="post">

            <input type="hidden" name="id" value="<?php echo $getId; ?>">

            <div class="form-group was-validated">
                <label class="form-label" for="user">Username</label>
                <input class="form-control" type="text" id="user" name="username" value="<?php echo $getUser; ?>" required>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="nim">NIP</label>
                <input class="form-control" type="text" id="nim" name="nip"  value="<?php echo $getNip; ?>" required>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="alamat">Alamat</label>
                <input class="form-control" type="text" id="alamat" name="alamat" value="<?php echo $getAddress; ?>" required>
            </div>

            <input class="btn btn-success w-100" type="submit" name="submit" value="Edit">

        </form>

        <form action="../table/dataDosen.php">
            <input class="btn btn-warning w-100" type="submit" value="Back">
        </form>
    </div>
</div>
</body>
</html>

