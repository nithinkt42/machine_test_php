<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        .main{
            background-image: url('image/admin.webp');
   background-position:center;
    background-size:cover;
    width: 100%;
    height: 60vh;
    background-repeat:no-repeat;
    background-size:cover;
        }
        .boxes{
            width:100%;
            height:auto;
            display:flex;
            text-align:center;
            
           justify-content: space-around;
        }
        .box1{
            width:200px;
            height:200px;
            background-color:#d8e8a9;
            display:flex;
            text-align:center;
            align-items:center;
            
           justify-content: space-around;
           border-radius:20px;

        }
        .box3{
            background-color:#aecfe8;
        }
        .box4{
            background-color:#ade6a3;
        }
        .box5{
            background-color:#f0d8e7;
        }
        .box1 a{
            text-decoration:none;
        }
        h1{
            width:100%;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container-fluid" ><button class="btn btn-dark"> <a href="index.php">home</a> </button>
    <h1 style="color:gray" >WELCOME ADMIN</h1>
        <div class="main"></div><br>
        
        <div class="boxes">
            <div class="box1 box2"> <a href="reg_mobile.php" class="text-dark" >REGISTER MOBILE</a> </div>
            <div class="box1 box3"> <a href="view_mob.php" class="text-dark">MANAGE PRODUCTS</a></div>
            <div class="box1 box4"> <a href="show_reg.php" class="text-dark">REGISTERED CUSTOMER</a> </div>
            <div class="box1 box5"> <a href="purchase_item.php"class="text-dark">PURCHASE REQUEST</a> </div>
        </div>
    </div>
    
</body>
</html>