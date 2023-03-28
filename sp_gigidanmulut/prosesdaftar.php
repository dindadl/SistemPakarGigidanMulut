<?php

include 'config.php';


$nama_user ="";
$jenis_kelamin ="";
$alamat_user ="";
$umur_user ="";

$error ="";
$sukses ="";

if(isset($_POST['simpanuser'])){
  $nama_user = $_POST['nama_user'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat_user = $_POST['alamat_user'];
  $umur_user = $_POST['umur_user'];



if($nama_user =='' or $jenis_kelamin =='' or $alamat_user =='' or $umur_user ==''){
    $error .= "Harap isi semua kolom.";
  }

  if(empty($error)){ 
      $sql1 = "INSERT INTO tb_datapasien(nama_user,jenis_kelamin,alamat_user,umur_user) VALUES ('$nama_user','$jenis_kelamin', '$alamat_user', '$umur_user')";
      $q1 = mysqli_query($conn,$sql1);

      if($q1){
        $sukses ="Data berhasil ditambahkan.";
         if($sukses){
		$cariuser= "select * from tb_datapasien";
   			 $db=mysqli_query($conn,$cariuser);
   			 while ($d=mysqli_fetch_array($db)) {

    			 $nama_user=$d['nama_user'];
    		 	 $jenis_kelamin = $d['jenis_kelamin'];
     			 $alamat_user = $d['alamat_user'];
     			$umur_user = $d['umur_user'];
       

  }
 
  

      
  }
}
}

}
?>

<?php if($error){
   echo '<script type="text/javascript">';
   echo 'alert("$error")';
    echo '</script>';
} 
?>
