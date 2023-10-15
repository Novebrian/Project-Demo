<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="hover.css">

    <style>
        .navbar .dropdown:hover .dropdown-menu {
            display: block;
        }

        .navbar .dropdown .dropdown-menu {
            display: none;
        }

        body {
            background-image: url("img/bg_gray.jpg");
        }

        .table{
            border: 1px;
        }

        .container
        {
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <?php
    session_start();
    ?>

    <!-- NAVBAR -->

    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <span class="navbar-brand">
                <h3>Pendataan Mahasiswa dan Dosen</h3>
            </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="tambah.php">
                            Tambah Data
                        </a>
                    </li>
                </ul>
            </div>
            <a href="logout.php" class="nav-link">Logout</a>
        </nav>
    </header>

    <div class="container mt-4 d-flex justify-content-center">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/quack.jpg" alt="Gambar" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Selamat Datang <?php echo $_SESSION['nama_admin']; ?> !</h5>
                        <h6 class="card-text">Anda adalah seorang administrator. <br>
                            Anda dapat menambahkan, menghapus serta menyunting data
                            yang terdaftar di database. <br>
                            Mohon gunakan wewenang anda dengan bijak.
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-light table-bordered table-striped d-flex justify-content-center">
        <center>
            <h3>Tabel Mahasiswa</h3>
        </center>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pass Foto</th>
        <th>Kelola</th>

        <?php
        include "config.php";
        $sql = "SELECT NIM, nama_mahasiswa, email, foto_mhs FROM mahasiswa ORDER BY NIM";
        $hasil = mysqli_query($config, $sql);
        $no = 1;

        while ($data = mysqli_fetch_array($hasil)) { ?>
            <tr>
                <td>
                    <?php echo $no; ?>
                </td>

                <td>
                    <?php echo $data['NIM']; ?>
                </td>

                <td>
                    <?php echo $data['nama_mahasiswa']; ?>
                </td>

                <td>
                    <?php echo $data['email']; ?>
                </td>

                <td>
                    <img src="<?php echo $data['foto_mhs']?>" width="80px">
                </td>

                <td>
                    <a href="editMhs.php?NIM=<?php echo $data['NIM'];?>">Sunting</a> |
                    <a href="hapus.php?NIM=<?php echo $data['NIM'];?>">Hapus</a>
                </td>
            </tr>
        <?php 
        $no++;
    }
        ?>
    </table>

    <table class="table table-light table-bordered table-striped d-flex justify-content-center">
        <center>
            <h3>Tabel Dosen</h3>
        </center>
        <th>No</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pass Foto</th>
        <th>Kelola</th>

        <?php
        include "config.php";
        $sql = "SELECT NPM, nama_dosen, email, foto_dosen FROM dosen ORDER BY NPM";
        $hasil = mysqli_query($config, $sql);

        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) { ?>
            <tr>
                <td>
                    <?php echo $no; ?>
                </td>

                <td>
                    <?php echo $data['NPM']; ?>
                </td>

                <td>
                    <?php echo $data['nama_dosen']; ?>
                </td>

                <td>
                    <?php echo $data['email']; ?>
                </td>

                <td>
                    <img src="<?php echo $data['foto_dosen']?>" width="80px">
                </td>

                <td>
                    <a href="editDosen.php?NPM=<?php echo $data['NPM'];?>">Sunting</a> |
                    <a href="hapus.php?NPM=<?php echo $data['NPM'];?>">Hapus</a>
                </td>
            </tr>
        <?php 
        $no++;
        }
        echo "</table>";
        ?>
    

    <footer class="footer mt-auto py-3 bg-light d-flex">
        <div class="container d-flex justify-content-center">
            <span class="text-muted">© 2023 Bebek Corp. Hak Cipta Dilindungi</span>
        </div>
    </footer>
</body>

</html>