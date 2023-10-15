<?php
    $config = mysqli_connect("localhost", "root", "", "universitas");

    if(!$config)
    {
        die('Gagal Terhubung Ke MySQLi : '.mysqli_connect_error());
    }
?>