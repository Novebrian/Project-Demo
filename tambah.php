<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>

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
    </style>
</head>

<body>
    <?php
    session_start();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg sticky-top navbar-light">
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
                        <a class="nav-link" href="admin.php">
                            HOME
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
                <div class="col-md-8">
                    <div class="card-body">
                        <form method="POST" action="upload.php" enctype="multipart/form-data">
                            <table class="table table-striped">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><input type="text" name="nama"></td>
                                </tr>

                                <tr>
                                    <td>NIM/NPM</td>
                                    <td>:</td>
                                    <td><input type="text" name="nomor"></td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="email" name="email"></td>
                                </tr>

                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input type="text" name="pass"></td>
                                </tr>

                                <tr>
                                    <td>Pass Foto</td>
                                    <td>:</td>
                                    <td><input type="file" name="foto"></td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="submit" name="submitDSN" value="Unggah Data Dosen">
                                    </td>
                                    <td>|</td>
                                    <td>
                                        <input type="submit" name="submitMHS" value="Unggah Data Mahasiswa">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light d-flex ">
        <div class="container d-flex justify-content-center">
            <span class="text-muted">© 2023 Bebek Corp. Hak Cipta Dilindungi</span>
        </div>
    </footer>
</body>

</html>