<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Css File -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

  <div class="login">
    <h2 class="text-center">Login</h2>
      <?php
      if (isset($_GET['pesan'])) {
          if ($_GET['pesan']== 'berhasil') {
            include "../action/loginAction.php";
              header("location:dataMhs.php");

          }elseif ($_GET['pesan'] == 'gagal') {
              ?>
            <div class="alert alert-danger" id="myAlert">
                Username/Password Salah
            </div>
              <?php
          }
      }
      ?>
    <form class="needs-validation" method="post" action="../action/loginAction.php">

      <div class="form-group was-validated">
        <label class="form-label" for="username">Username</label>
        <input class="form-control" type="text" id="username" name="username" required>
          <div class="invalid-feedback">Tolong Masukan Username!</div>
      </div>

      <div class="form-group was-validated">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" id="password" name="password" required>
          <div class="invalid-feedback">Tolong Masukan Password!</div>
      </div>
      <input class="btn btn-success w-100" type="submit" value="Masuk">

  </div>
</body>
</html>