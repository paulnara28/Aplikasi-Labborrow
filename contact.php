<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" type="image/png" href="./images/logo1.png">
    <title>Lab Borrow</title>
</head>
<style>
    * {
        font-family: 'Roboto', monospace;
    }
</style>

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
                        <a class="nav-link fs-5" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" href="index.php">Contact</a>
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

    <div class="container">
        <div class="row">
            <div class="text-center " style="margin-top: 135px;">
            <h1 class="fw-bolder" style="font-size: 48px;">Contact Us<br></h1>
            <hr>
            </div>
            </div>

<div class="container py-4">
  <form id="contactForm">
    <div class="mb-3">
      <label class="form-label" for="name">Name</label>
      <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
      <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
    </div>

    <div class="mb-3">
      <label class="form-label" for="emailAddress">Email Address</label>
      <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
      <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
      <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
    </div>

    <div class="mb-3">
      <label class="form-label" for="message">Message</label>
      <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
      <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
    </div>

    <div class="d-none" id="submitSuccessMessage">
      <div class="text-center mb-3">Form submission successful!</div>
    </div>

    <div class="d-none" id="submitErrorMessage">
      <div class="text-center text-danger mb-3">Error sending message!</div>
    </div>

    <div class="mt-2">
      <button class="btn btn-primary btn-lg" type="submit">Send</button>
    </div>
  </form>
</div>
</div>

<footer class="bg-light text-center text-lg-start" >
    <div class="text-center p-3" style="background-color: #1B5D8B; margin-top:80px;">
        <i class="fas fa-gavel text-white" style="margin-right: 5px;"></i>
        <label class="text-white">2023 Copyright - Lab Borrow</label>
    </div>
</footer>
</body>
</html>
