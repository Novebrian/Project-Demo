<?php
        session_start();
            include "config.php";

            $npm = $_POST['npm'];
            $pass = $_POST['pass'];

            $sql = "SELECT * FROM dosen WHERE npm=$npm AND password_dsn=$pass";

            $hasil = mysqli_query($config, $sql) or exit("Error query : ".$sql);

            if(mysqli_num_rows($hasil)>0)
            {
                header("location:user.php");
            }

            else
            { ?>
                <h2>Maaf data anda tidak terdaftar dalam database kami</h2>
                <p>Silahkan lakukan daftar ulang ke pihak administrasi atau pastikan identitas anda dan coba <a href="login.php">login</a> kembali</p>
            <?php }
    ?>