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
                    <a class="nav-link" href="<?=base_url()?>index.php/DataAdmin">Data Parkir</a>
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
        <h3>Data Parkir
            <div class="text-right" style="float: right"><button type="button" class="btn btn-primary" onclick="print()">Print</button></div>
        </h3>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">
                            <a name="" id="" class="btn btn-primary" href="<?=base_url()?>index.php/DataAdmin/tambah" role="button">Tambah data</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($this->db->get('tbl_admin')->result() as $key => $value) {
                    ?>
                    <tr class="">
                        <td scope="row"><?=$value->id_admin?></td>
                        <td><?=$value->nama?></td>
                        <td><?=$value->username?></td>
                        <td scope="row"><?=$value->jabatan?></td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="<?=base_url()?>index.php/DataAdmin/edit/<?=$value->id_admin?>" role="button">Edit</a>
                            <a name="" id="" class="btn btn-danger" href="<?=base_url()?>index.php/DataAdmin/hapus/<?=$value->id_admin?>" role="button">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="<?=base_url()?>assets/js/bootstrap.min.js">
  </script>
</body>

</html>