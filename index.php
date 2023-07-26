<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="icon" type="image/png" href="./images/logo1.png">
    <title>Lab Borrow</title>
    <style>
    * {
        font-family: 'Roboto', monospace;
    }
    </style>
</head>

<body>
    <nav class=" navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: #2691D9;">
        <div class="container ">
        <a class="navbar-brand" style="font-size: 25px;" href="#">
            <img src="./images/logo1.png" alt="Lab Borrow Logo" style="height: 45px; width: 45px; margin-right: 5px;">
            Lab Borrow
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="tentangkami.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item ms-5 loggin-button">
                        <a href="login.php">
                            <button type="button" class="btn btn-light "
                                style="color: #2691D9; font-weight:bold"><i class="fas fa-sign-in-alt"></i> Login</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- AKhir Navbar -->
    <div class="container-fluid " style="height: 100vh; ">
        <div class="row  ">
            <div class="col-6  d-flex align-items-center">
                <div class="bungkus ms-5" style="width: 35vw; margin-top: 100px;">
                    <h1 class="fw-bolder" style="font-size: 48px; margin-left: 50px">Welcome Rent Here <br>
                        For Those Who Have An Account</h1>
                    <p class="mt-4" style="margin-left: 50px">Selamat Datang di Lab Borrow, Tempat Terbaik untuk Memenuhi Kebutuhan Peminjaman Barang Laboratorium Komputer !!</p>
                    <a href="tentangkami.php" style="margin-left: 50px"><button type="button" class="btn btn-primary px-3 mt-3">Read
                            Now!</button></a>
                </div>

            </div>
            <div class="col-6 mt-5">
                <img class="" src="./images/tentangkami.png" alt=""  style="width: 520px; margin-top: 100px;">
            </div>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3" style="background-color: #1B5D8B;">
        <i class="fas fa-gavel text-white" style="margin-right: 5px;"></i>
        <label class="text-white">2023 Copyright - Lab Borrow</label>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>