<?php
include 'connection.php';
 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];

    echo $name;
    $sql="select * from user where username='$name'&& password='$pass'";
    $result=mysqli_query($connect,$sql);
    $num=mysqli_num_rows($result);
     echo $num;
     if($num==1){
        header('location:index.php');
     }else{
        header('location:home.php');
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
</head>
<body>
    <div class="container">
        <h1>LOG-IN</h1><br><br>
    <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">USERNAME</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PASSWORD</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">LOG-IN</button>
</form>
    </div>
    
</body>
</html>