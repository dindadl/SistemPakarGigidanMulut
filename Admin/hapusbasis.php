<?php

include '../config.php';


$error ="";

if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];


  $sql = "DELETE FROM tb_pengetahuan WHERE id_pengetahuan = $id ";
  $q1 = mysqli_query($conn,$sql);

 if($q1){
       header('location:admbasis.php');
      }else{
        $error = mysqli_error($conn);
      } 
    
    }



 
?>