<?php
include 'connection.php';
if (isset($_POST['submit'])){
    $model=$_POST['model'];
    $brand=$_POST['brand'];
    $rate=$_POST['rate'];
    $img=$_FILES['file'];
    $imgname=$_FILES['file']['name'];
    $tmpname=$_FILES['file']['tmp_name'];
    $destination="image/".$imgname;

    move_uploaded_file($tmpname,$destination);

    $sql="insert into mobile(model,brand,price,image)values('$model','$brand','$rate','$destination')";
    $result=mysqli_query($connect,$sql);
    if($result){
      // echo "done";
      header('location:view_mob.php');
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
   <style>
   h1{
       color:red;
       padding-left:350px;
    }
   </style>
   
   
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin_dash.php">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="#"> <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="#"></a>
      <a class="nav-link" href="#"></a>
      <a class="nav-link disabled"></a>
    </div>
  </div>
</nav>
<div class="container">
    <H1>REGISTER MOBILE PHONE</H1>
    
<form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">MODEL NAME</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="model">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">BRAND</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name="brand">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">RATE</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name="rate">
  </div>
  <form>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="file">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>

 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form></div>
</body>
</html>