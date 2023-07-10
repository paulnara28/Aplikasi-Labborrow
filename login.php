<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Lab Borrow</title>
</head>
<body> 

    <?php
    if (!isset($_session['admin'])) {
        $_session['admin'] = "";
    }
    echo $_session['admin']; ?>

    <!----------------------- Main Container -------------------------->
    <div class="row" style="background:#0379C8">
     <div class="container d-flex justify-content-center align-items-center min-vh-100" >

    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--------------------------- Left Box ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: ">
           <div class="featured-image mb-3">
            <img src="./user/images/admin.png" class="img-fluid" >
           </div>
         </div> 

    <!-------------------- ------ Right Box ---------------------------->

        
       <div class="col-md-6 right-box">
          <div class="row align-items- text-center" >
                <div class="header-text mb-4">
                     <h2>Login Admin</h2>
                </div>
                <form action="proseslogin.php" method="post"> 
                <div class="input-group mb-3">
                    <input name="username" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6" >Login</button>
                </div>
                <div class="input-group mb-3">
                <a href="user/login_anggota.php" class="btn btn-lg btn-light w-100 fs-6">
                  <img src="./user/images/user.png" style="width:20px" class="me-2">
                 <small>Login Sebagai Anggota</small>
                </a>
                </div>
          </div>
       </div> 
       </form>
      </div>
    </div>

</body>
</html>
</div>