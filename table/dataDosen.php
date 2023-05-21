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
</head>
<body>
<?php
    session_start();
    global $getUser;
    if (!isset($_SESSION['usertable'])) {
        header("location:../utils/login.php");
    }
?>

<div class="container">
    <h2>Table Data Dosen</h2>
    <h3>User : <?php echo $_SESSION['usertable'] ?></h3>

    <table class="table">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>NIP</td>
            <td>Alamat</td>
            <td>Action</td>
        </tr>

        <?php
        include '../koneksi.php';
        global $koneksi;
        $data = mysqli_query($koneksi, "SELECT * FROM dosenmember");
        while ($result = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $result['id'] ?></td>
                <td><?php echo $result['nama'] ?></td>
                <td><?php echo $result['nip'] ?></td>
                <td><?php echo $result['alamat'] ?></td>
                <td><a class="btn btn-warning" href="../utils/editDosen.php?edit=<?php echo $result['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="../action/deleteAction2.php?delete=<?php echo $result['id']; ?>">Delete</a>
                </td>

            </tr>
            <?php
        }
        ?>
    </table>

    <form action="../utils/addDosen.php">
        <button type="submit" class="btn btn-info mb-3">Tambahkan Dosen</button>
    </form>

    <form action="../action/logoutAction.php">
        <button type="submit" class="btn btn-danger mb-3">Log Out</button>
    </form>

</div>
</body>
</html>

