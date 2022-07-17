<?php
include 'connection.php';

if(isset($_POST['reg_btn'])){
    $name=$_POST['name1'];
    $email=$_POST['email1'];
    $contact=$_POST['contact1'];
    $username=$_POST['user1'];
    $password=$_POST['pass1'];

    $sql="insert into user(name,email,contact,username,password)values('$name','$email','$contact','$username','$password')";
    
    $result=mysqli_query($connect,$sql);
    if($result){
        echo "success";
       
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
    <div class="container">
        <H1>USER REGISTRATION</H1>
    <form method="POST">
    <div class="form-group">
    <label for="exampleInputEmail1">NAME</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name1">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">EMAIL</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email1">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CONTACT</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="contact1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">USER NAME</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="user1">
  </div><div class="form-group">
    <label for="exampleInputPassword1">PASSWORD</label>
    <input type="password" class="form-control" id="pass2" id="exampleInputPassword1" name="pass1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" id="pass2">CONFORM PASSWORD</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary" name="reg_btn" onclick="done()">REGISTER</button>
 <small class="s1"></small>
</form>
    </div>

    <script>
      function done(){
        a=document.getElementById('pass1').value
        b=document.getElementById('pass2').value

        if(!a=b){
          document.getElementById('s1').innerHTML="*Password must be same....!"
          document.getElementById('s1').style="color:red"

        }
      }

    </script>
    
</body>
</html>