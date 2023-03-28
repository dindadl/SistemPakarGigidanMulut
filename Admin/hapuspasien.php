<?php

include '../config.php';


$error ="";

if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];


  $sql = "DELETE FROM tb_datapasien WHERE id_pasien = $id ";
  $q1 = mysqli_query($conn,$sql);

 if($q1){
       header('location:admpasien.php');
      }else{
        $error = mysqli_error($conn);
      } 
    
    }



 
?>