<?php
include 'connection.php';

if(isset($_POST['submit'])){
  $uname=$_POST['uname'];
  $upass=$_POST['upass'];
  $sql="select * from user where username='$uname' && password='$upass'";
  $result=mysqli_query($connect,$sql);

  echo $uname;

  
  $num=mysqli_num_rows($result);
  if($num==1){
    header('location:index.php');
  }else{
    ?>
    <script>
      alert "inccorect"
    </script>
    <?php
   
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  
  <style>
    .login{
    width: 90px;
    height: 40px;
    margin-right: 20px;
    border-radius: 20px;
    background-color:whitesmoke;
    border-color:rgb(196, 240, 250);
    position: relative;
   
}
.login2{
  width: 90px;
    height: 40px;
    margin-right: 20px;
    border-radius: 20px;
    background-color:GRAY;
    border-color:rgb(196, 240, 250);
    position: relative;
    color:white;

}
.login1{
    width: 90px;
    height: 40px;
    margin-right: 20px;
    border-radius: 20px;
    background-color:green;
    border-color:rgb(196, 240, 250);
    position: relative;
    color:white;
   
}
    h1{
      width:100%;
      text-align:center;
    }
   .main{
    background-image: url('image/home1.jpg');
   background-position:center;
    background-size:cover;
    width: 100%;
    height: 100vh;
    background-repeat:no-repeat;
    background-size:cover;
   }
   .boxes{
            width:100%;
            height:auto;
            display:flex;
            text-align:center;
            
           justify-content: space-between;
           margin-left:20px;
        }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="image/logo.png" alt="" width="100px" height="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#txt" ID="txt">MOBILE STORE <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    <button class="login"><a href="user_reg.php" class="text-dark">Sign Up</a> </button>
    <button class="login1"><a href="login.php" class="text-light">Sign IN</a> </button>
    <button class="login2"><a href="admin_login.php" class="text-light">ADMIN</a> </button>
    
    
    
<!-- <button type="button" class="btn login1" data-toggle="modal" data-target="#exampleModal">
Log-In
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LOGI-IN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST">
  <div class="form-group ">
    <label for="exampleInputEmail1">USERNAME</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname"><p id="p1"></p>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="upass"><p id="p2"></p>
  </div>
  
  <button type="submit" class="btn btn-primary" onclick="return done()" name="submit"><a href="" class="text-light" >LOG-IN</a> </button>
</form>
   
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
  </div>
</nav>
<div class="main"></div>
<div class=".container">
<h1 id="#txt">mobile</h1><br><br>
<?php
   $sql="select * from mobile";
   $result=mysqli_query($connect,$sql);
   if(mysqli_num_rows($result)>0){
       while($rows=mysqli_fetch_assoc($result)){
           $model=$rows['model'];
           $brand=$rows['brand'];
           $price=$rows['price'];
           $image=$rows['image'];
  
  ?>
  <div class="boxes">
    <div class="box">
    <div class="card" style="width: 18rem;">
  <img src="<?php echo ($image)?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo ($model)?></h5>
    
    <a href="#" class="btn btn-primary">PURCHASE</a>
  </div>
</div>
       </div>
  


  <?php

}}?>
  

  
      
    
   </div>



  

</div>

<script>
      
        function done(){
          status=1
            a=document.getElementById('exampleInputEmail1').value
            b=document.getElementById('exampleInputPassword1').value

            if(a==''){
              document.getElementById('p1').innerHTML="*username must be required..."
              document.getElementById('p1').style="color:red"
              status=0
            }else{

            }
            if(b==''){
              document.getElementById('p2').innerHTML="*password must be required..."
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