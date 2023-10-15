<?php
    if(isset($_GET['NIM']))
    {
        include "config.php";
        $NIM=$_GET['NIM'];

        $sql="DELETE FROM mahasiswa WHERE NIM='$NIM'";
        $hasil=mysqli_query($config, $sql);
        echo "<script> alert('Data Berhasil Dihapus')</script>";
        header("location:admin.php");
    }

    elseif(isset($_GET['NPM']))
    {
        include "config.php";
        $NPM=$_GET['NPM'];

        $sql = "DELETE FROM dosen WHERE NPM='$NPM'";
        $hasil=mysqli_query($config, $sql);
        echo "<script> alert('Data Berhasil Dihapus')</script>";
        header("location:admin.php");
    }
?>