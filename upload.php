<?php
include "config.php";

$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if (isset($_POST['submitDSN'])) {
    $location = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];

    $uploaddir = "upload/";
    $uploadfile = $uploaddir . $nama_file;

    if (move_uploaded_file($location, $uploadfile)) {
        // File berhasil diunggah
        $sql = "INSERT INTO dosen(NPM, nama_dosen, email, password_dsn, foto_dosen)
                VALUES ('$nomor', '$nama', '$email', '$pass', '$uploadfile')";
        $hasil = mysqli_query($config, $sql);

        if ($hasil) {
            echo "Data berhasil disimpan<br>";
        } else {
            echo "Data gagal disimpan<br>";
        }
    } else {
        echo "Gagal mengunggah file<br>";
    }

    if ($hasil) {
        header('location:admin.php');
    } else {
        echo "Data gagal disimpan<br>";
        echo "<a href=tambah.php>Kembali ke halaman tambah data</a>";
    }

} elseif (isset($_POST['submitMHS'])) {
    $location = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];

    $uploaddir = "upload/";
    $uploadfile = $uploaddir . $nama_file;

    if (move_uploaded_file($location, $uploadfile)) {
        // File berhasil diunggah
        $sql = "INSERT INTO mahasiswa(NIM, nama_mahasiswa, email, password_mhs, foto_mhs)
                VALUES ('$nomor', '$nama', '$email', '$pass', '$uploadfile')";
        $hasil = mysqli_query($config, $sql);

        if ($hasil) {
            echo "Data berhasil disimpan<br>";
        } else {
            echo "Data gagal disimpan<br>";
        }
    } else {
        echo "Gagal mengunggah file<br>";
    }


    if ($hasil) {
        header('location:admin.php');
    } else {
        echo "Data gagal disimpan<br>";
        echo "<a href=tambah.php>Kembali ke halaman tambah data</a>";
    }
}
?>