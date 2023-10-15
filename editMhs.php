<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
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

        .table {
            border: 1px;
        }

        .container {
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
    if(isset($_GET['NIM']))
    {
        session_start();
    include "config.php";

    $nim = $_GET['NIM'];

    $sql = "SELECT * FROM mahasiswa WHERE NIM='$nim'";
    $hasil = mysqli_query($config, $sql);
    $data = mysqli_fetch_array($hasil);
    }
    ?>

    <div class="container mt-4 d-flex justify-content-center">
        <div class="card mb-3" style="max-width: 600px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <form method="POST" action="editMhs.php" enctype="multipart/form-data">
                            <table class="table table-borderless">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><input type="text" name="nama"></td>
                                </tr>

                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td><input type="text" value="<?php echo $data['NIM']; ?>" disabled></input>
                                    <input type="text" name="NIM" value="<?php echo $data['NIM']; ?>" hidden>
                                    </td>
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
                                    <td colspan="2">
                                        <input type="submit" name="submit" value="Perbarui Data Mahasiswa">
                                    </td>
                                    <td>
                                        <input type="reset" value="Batal Perbarui Data">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        include "config.php";

        $nim = $_POST['NIM'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $location = $_FILES['foto']['tmp_name'];
        $nama_file = $_FILES['foto']['name'];

        $uploaddir = "upload/";
        $uploadfile = $uploaddir . $nama_file;

        if (!empty($location)) {
            $sql = "UPDATE mahasiswa SET nama_mahasiswa='$nama',
                    email='$email', password_mhs='$pass', foto_mhs='$uploadfile'
                    WHERE NIM='$nim'";
            $hasil = mysqli_query($config, $sql);

            if ($hasil) {
                move_uploaded_file($location, $uploadfile);
                echo "<script> alert('Data berhasil diubah')</script>";
                echo "Nama File : <b>$nama_file</b> sukses di
                 upload<br/><br/>";
                echo "<a href='admin.php'>kembali</a>";
            } else {
                echo "Data gagal disimpan";
            }
        } else {
            $sql = "UPDATE mahasiswa SET nama_mahasiswa='$nama',
                    email='$email', password_mhs='$pass'
                    WHERE NIM='$nim'";
            $hasil = mysqli_query($config, $sql);
            header('location:admin.php');
        }
    }
    ?>
</body>

</html>