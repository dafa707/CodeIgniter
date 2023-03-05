<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand" href="#">APP</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?=base_url()?>index.php/home" aria-current="page">Dashboard <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>index.php/DataParkir">Data Parkir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>index.php/DataAdmin">Data Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>index.php/Login">Keluar</a>
                </li>
            </ul>
        </div>
    </nav>
  </header>
  <main class="container">
    <form action="<?=base_url()?>index.php/DataAdmin/tambah_proses" method="post">
      <div class="mb-3">
        <label for="" class="form-label">Nama</label>
        <input type="text"
          class="form-control" name="nama" id="" aria-describedby="nama" placeholder="">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Username</label>
        <input type="text"
          class="form-control" name="username" id="" aria-describedby="username" placeholder="">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input type="password"
          class="form-control" name="password" id="" aria-describedby="password" placeholder="">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Jabatan</label>
        <input type="text"
          class="form-control" name="jabatan" id="" aria-describedby="jabatan" placeholder="">
      </div>
      <input name="" id="" class="btn btn-primary" type="submit" value="Simpan">
    </form>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="<?=base_url()?>assets/js/bootstrap.min.js">
  </script>
</body>

</html>