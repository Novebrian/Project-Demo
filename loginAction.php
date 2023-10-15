<?php
        session_start();
            include "config.php";

            $nomor= $_POST['nomor'];
            $nama = $_POST['nama_admin'];
            $pass = $_POST['pass'];

            $sql = "SELECT * FROM admin WHERE nomor='$nomor' AND nama='$nama' AND password_admin='$pass'";

            $hasil = mysqli_query($config, $sql) or exit("Error query : ".$sql);

            if(mysqli_num_rows($hasil)>0)
            {
                $_SESSION['nama_admin'] = $nama;
                header("location:admin.php");
            }

            else
            { ?>
                <h2>Maaf data anda tidak terdaftar dalam database kami</h2>
                <p>Silahkan lakukan daftar ulang ke pihak administrasi atau pastikan identitas anda dan coba <a href="login.php">login</a> kembali</p>
            <?php }
    ?>