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
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTACT</th>
     
    </tr>
  </thead>
  <tbody>
    <?php

    $SQL="select * from user";
    $RESULT=mysqli_query($connect,$SQL);

    if(mysqli_num_rows($RESULT)>0){
        while($row=mysqli_fetch_assoc($RESULT)){
            $name=$row['name'];
            $email=$row['email'];
            $cont=$row['contact'];
          
            ?>
             <tr>
     
      <td scope="row"><?php echo ($name) ?></td>
      <td><?php echo ($email) ?></td>
      <td><?php echo ($cont) ?></td>
    </tr>



    <?php
        }
    }
    
    
    ?>



    <!-- <tr>
      <th scope="row">NAME</th>
      <td>EMAIL</td>
      <td>CONTACT</td>
      
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