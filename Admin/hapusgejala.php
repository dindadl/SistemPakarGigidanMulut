<?php

include '../config.php';


$error ="";

if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];


  $sql = "DELETE FROM tb_gejala WHERE kode_gejala = '$id' ";
  $q1 = mysqli_query($conn,$sql);

 if($q1){
       header('location:admgejala.php');
      }else{
        $error = mysqli_error($conn);
      } 
    
    }



 
?>