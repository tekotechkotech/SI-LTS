<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="landing/bs5/dist/css/bootstrap.min.css">


    <!-- CSS Lainnya -->
    <link rel="stylesheet" href="landing/css/navbar.css">
    <link rel="stylesheet" href="landing/css/body.css">
    <link rel="stylesheet" href="landing/css/responsive.css">
<?php
// include "template/t_atas.php"
?>
    <title>SI-LTS PNC</title>
</head>

<body>

    <img src="landing/assets/vector-bg.png" class="bg" width="65%">

    <!-- navbar menu -->
    <nav class="navbar navbar-expand-lg navbar-light mt-4 fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="landing/assets/logo.png" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <div></div>
                <div class="nav nav-pills ">
                    
                    <div class="nav-link active bg-active rounded-pill link tebel-sedang text-center" width="500px">
                    <div class="row">
                        <div class="tebel-sedang col">Masuk Sebagai</div>
                            <div class="col">
                                <a class="text-center nav-link active link rounded-pill" href="alumni/">Alumni</a>
                            </div>
                            <div class="col">
                                <a class="text-center nav-link active link rounded-pill" href="login/">Pegawai</a>
                            </div>
                            </div>
                        </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- konten -->

    <div class="container">

        <br><br><br>

        <div class="row mt-5 mb-5">
            <div class="col-sm-12 position-relative p-4">
                <div class="position-absolute top-0 end-0">
                    <img src="landing/assets/vector-konten.png" class="img">
                </div>

                <H1 class="display-6 tebel-sedang text-warning">SISTEM INFORMASI</H1>
                <H1 class="display-4 text-truncate tebel-sedang text-green"><b>LEGALISASI</b></H1>
                <H1 class="display-4 text-truncate tebel-sedang text-green"><b> ONLINE</b></H1>
                <h1 class="display-4 tebel-sedang text-green">DAN
                    <B class="teks-danger"> TRACER STUDY</B>
                </h1>


                <div class="desc mt-4">
                    <p>Aplikasi Legalisasi Online dan Tracer Study Politeknik Negeri Cilacap Berbasis Android untuk Alumni Mahasiswa Politeknik Negeri CIlacap</p>
                </div>

                <!-- <div class="mt-5">
                    <a type="button" data-toggle="modal" data-target="#ee" class="button rounded-pill shadow tebel-sedang">Download Aplikasi</a>
                </div> -->

            </div>

        </div>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="landing/bs5/dist/js/bootstrap.bundle.min.js"></script>

    <script src="landing/js/onscroll.js"></script>

    
</body>

</html>