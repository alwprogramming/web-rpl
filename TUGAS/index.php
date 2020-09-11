<?php

include 'metodologi.php';
include 'function.php';

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <style>
    .container .header {
      background-color: orange;
      padding-top: 50px;
      padding-bottom: 20px;
    }

    .container .header p {
      margin-left: 100px;
      margin-right: 100px;
    }

    .container {
      width: 1000px;
      margin-top: 130px;
      min-height: 100%;
      position: relative;
    }

    .container .badan {
      background-color: green;
    }

    body {
      background-image: url(img/background2.jpg);
      background-size: cover;
      background-attachment: fixed;
      text-align: center;
      color: white;
    }

    hr {
      border-width: 7px;
      border-color: white;
      width: 20%;
    }
  </style>
  <title>Hello, world!</title>
</head>

<body>
  <div class="container">
    <div class="header">
      <h1>METODOLOGI YANG COCOK </h1>
      <hr><br>
      <p>SiCeMet merupakan aplikasi simulasi untuk cek metodologi agar sesuai dengan karakteristik proyek
        dalam pengembangan sistem. Selamat mencoba &#128522</p>
    </div>
    <div class="badan">
      <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">Nama Metodologi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($hasil as $h) : ?>
            <tr>
              <td><?= $h['nama']; ?></td>
              <td>
                <a href="detail.php?id=<?= $h['id']; ?>"> Detail </a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>