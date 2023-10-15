<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="hover.css">

    <style>
        .card {
            margin-top: 50px;
            margin-bottom: 50px;
            background-image: url("img/page-cover.png");
            background-color: blanchedalmond;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="text"]:hover,
        input[type="password"]:hover {
            border: 1px solid #007bff;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border: 1px solid #007bff;
        }

        body {
            background-image: url("img/bg_gray.jpg");
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

    <div class="d-flex align-item-center justify-content-center" style="min-height: 100vh;">
        <div class="card custom-card mb-3 col-md-4 d-flex align-item-center justify-content-center"
            style="max-width: 540px;">
            <div class="row">
                <center>
                    <h2>Login Administrator</h2>
                </center>
                <div class="col-4">
                    <img src="img/pngwing.com.png" class="img-fluid rounded-start">
                </div>

                <div class="col-8">
                    <div class="card-body">
                        <form action="loginAction.php" method="POST">
                            <table>
                                <tr>
                                    <td><input type="text" name="nama_admin" placeholder="Nama Administrator"></td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="nomor" placeholder="Nomor Administrator"></td>
                                </tr>

                                <tr>
                                    <td><input type="password" name="pass" placeholder="Password"></td>
                                </tr>

                                <tr>
                                    <td><input type="submit" name="login" value="LOGIN"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 link d-flex justify-content-center">
                    <table>
                        <tr>
                            <td>
                                <a href="login2.php">Login Sebagai Mahasiswa</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>

            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 link d-flex justify-content-center">
                    <table>
                        <tr>
                            <td>
                                <a href="login3.php">Login Sebagai Dosen</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
</body>

</html>