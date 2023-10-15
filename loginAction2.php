<?php
        session_start();
            include "config.php";
            
            $nim = $_POST['nim'];
            $pass = $_POST['pass'];

            $sql = "SELECT * FROM mahasiswa WHERE NIM=$nim AND password_mhs=$pass";

            $hasil = mysqli_query($config, $sql) or exit("Error query : ".$sql);

            if(mysqli_num_rows($hasil)>0)
            {
                $_SESSION['nama_mhs']=$data['nama_mhs'];
                header("location:user.php");
            }

            else
            { ?>
                <h2>Maaf data anda tidak terdaftar dalam database kami</h2>
                <p>Silahkan lakukan daftar ulang ke pihak administrasi atau pastikan identitas anda dan coba <a href="login.php">login</a> kembali</p>
            <?php }
    ?>