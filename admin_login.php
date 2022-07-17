<?php
include 'connection.php';
 
if(isset($_POST['submitnew'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];

    echo $name;
    $sql="select * from admin";
    $result=mysqli_query($connect,$sql);
    echo $name;
    $num=mysqli_num_rows($result);
     echo $num;
     if($num==1){
        header('location:admin_dash.php');
     }else{
        header('location:admin_login.php');
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
       color:GRAY;
       padding-left:350px;
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="log">
            <h1>ADMIN LOGIN</h1>
        <form method="POST">
  <div class="form-group ">
    <label for="exampleInputEmail1">USERNAME</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"><p id="p1"></p>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass"><p id="p2      "></p>
  </div>
  
  <button type="submit" class="btn btn-primary" onclick="return log()" name="submitnew"><a href="admin_dash.php" class="text-light">LOG-IN</a> </button>
</form>
        </div>

    </div>

    <script>
      
        function log(){
          status=1
            a=document.getElementById('exampleInputEmail1').value
            b=document.getElementById('exampleInputPassword1').value

            if(a==''){
              document.getElementById('p1').innerHTML="*Username must be required..."
              document.getElementById('p1').style="color:red"
              status=0
            }else{

            }
            if(b==''){
              document.getElementById('p2').innerHTML="*Password must be required..."
              document.getElementById('p2').style="color:red"
              status=0
            }
            if(status==0){
        return false
      }
        }


    </script>
    
</body>
</html>