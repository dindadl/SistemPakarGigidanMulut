<?php

include '../config.php';

$username ="";
$password ="";

$err ="";
$sukses ="";

if(isset($_POST['registrasi'])){
  $username = $_POST['username'];
  $password = $_POST['password'];


  if($username =='' or $password ==''){
    $err .= "Harap isi semua kolom.";
  }

  if($username !=''){
    $sql1 = "SELECT username from tb_admin where username ='$username'";
    $q1 = mysqli_query($conn,$sql1);
    $n1 = mysqli_num_rows($q1);

    if($n1 > 0){
      $err = "Username sudah terdaftar";
    }
}
    if(empty($err)){

      $sql1 = "INSERT INTO tb_admin(username,password) VALUES ('$username','$password')";
      $q1 = mysqli_query($conn,$sql1);

      if($q1){
        $sukses = "Proses Berhasil. Silahkan melakukan Login.";
          if($sukses){
   echo '<script type="text/javascript">';
   echo 'alert("$sukses")';
    echo '</script>';

    header("location:login.php");
} 
      }

      
    }
  
}
?>


<?php if($err){
   echo '<script type="text/javascript">';
   echo 'alert("$err")';
    echo '</script>';
} 
?>

<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, intial-scale=1.0">

<title>Sistem Pakar Diagnosa Penyakit Gigi dan Mulut Manusia </title>

<link rel="stylesheet" href="admin.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Product Sans:wght@200;300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<div class="container">
<div class="row">
  <div class="col-1">

<form action="" method="POST">
   <h1>Registrasi</h1>
  <br>
  <div class="row-2">
    <div class="col-1">
    
      <label> Username </label>
      <fieldset>
        <input name="username" type="text" id="username" placeholder="Username" required>
      </fieldset>

    </div>
    <br>
      
   
</div>
    <br>
      <div class="col-1">
    
      <label> Password </label>
      <fieldset>
        <input name="password" type="password"id="password" placeholder="Password" required>
      </fieldset>

    </div>
    <br>

    <button type="submit" class="btn" name="registrasi"> Registrasi </button>

</form>
<br>
<br>
  
</div>

</div>
</div>
<div class="footer">
  <div class="container">
  
  <div class="footer-col-1">
    <br></br>
    <h3>Website by Dinda Dwi Laras</h3>
    <p>All rights reserved.</p>
    
    </div>
    </div>
</body>
</html>