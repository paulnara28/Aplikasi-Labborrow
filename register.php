<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" >

</head>
<body>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
          <h2 class="page-header">Pendaftaran Anggota</h2>

          <div class="panel panel-primary">
            <div class="panel panel-heading"> 
                Form Pendaftaran
            </div> 
            <div class="panel-body">  
                <form action="prosesregister.php" method="post">  
                     <div class ="form-group">
                          <label for="exampleInputPassword1">Nama Lengkap</label>
                          <input type="text"   name="nama" 
                          class="form-control" placeholder="Nama Lengkap..." required>
                    </div>
                   <div class ="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password"   name="password" 
                        class="form-control" placeholder="Password..." required>
                    </div>
                    <label for=" ">Kelas</label>
                     <div class="row">  
                        <div class="col-md-3">
                       <select name="kelas" class="form-control">
                         <option value="" disabled selected>- Pilih Kelas -</option>
                         <option value="10">10</option>
                         <option value="11">11</option>
                         <option value="12">12</option>
                       </select>
                     </div>
                     <div class="col-md-3">
                       <select name="jurusan" class="form-control">
                         <option value="" disabled selected>- Pilih Jurusan -</option>
                         <option value="RPL">Rekayasa Perangkat Lunak</option>
                         <option value="MM">MultiMedia</option>
                         <option value="ANM">Animasi</option>
                         <option value="TKJ">Teknik Komputer Jaringan</option>
                         <option value="JB">Jasa Boga</option>
                         <option value="APH">Akomodasi Perhotelan</option>
                       </select>
                     </div>
                     <div class="col-md-3">
                       <select name="no_kelas" class="form-control">
                         <option value="" disabled selected>- Pilih Nomer -</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                       </select>
                     </div>
                     </div>
                    

              <div class="row" style="margin-top: 15px; margin-left: 5px">
                <button type="submit" class="btn btn-danger">Tambah Data</button>
              <a href="barang.php" class="btn btn-danger">Back</a>
              </div>
        </form>
            </div>
          </div>
    </div>
</div>
  
</body>


<?php include "templates/footer.php"; ?>