<?php
include 'connection.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from mobile where model='$id'";
    $result=mysqli_query($connect,$sql);
    if($result){
        header('location:view_mob.php');
    }
    
}

?>