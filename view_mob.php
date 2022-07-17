<?php
include 'connection.php';

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
       color:GREEN;
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
    <button class="btn btn-primary"> <a href="reg_mobile.php" class="text-light"> ADD MOBILE</a> </button>
    <div class="container">
    <H1>MANAGE PRODUCTS</H1>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">MODEL</th>
      <th scope="col">BRAND</th>
      <th scope="col">RATE</th>
      <th scope="col">IMAGE</th>
      <th scope="col">OPERATION</th>
      
    </tr>
  </thead>
  <tbody>


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
          <tr>
      <th scope="row"><?php echo ($model)?></th>
      <td><?php echo ($brand);?></td>
      <td><?php echo ($price);?></td>
      <td><img src="<?php echo ($image);?>" alt="" width="100px" height="100px"></td>
      <td><button class="btn btn-primary"><a href="update.php?updateid=<?php echo ($model) ?> " class="text-light">UPDATE</a></button>
      <button class="btn btn-danger"><a href="delete.php?deleteid=<?php echo ($model) ?>" class="text-light">DELETE</a></button></td>
    </tr>
  
 
  <?php
      }
  }

  ?>
  




    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
    </div>
    
</body>
</html>