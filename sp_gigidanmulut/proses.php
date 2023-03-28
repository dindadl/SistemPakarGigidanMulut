<?php
include 'config.php';



if(isset($_POST['submit'])){
	$qry='select id_rulecheck from tb_rulecheck where ';
	array_pop($_POST);
	$rule_input=array();
	foreach ($_POST as $where) {
		$qry.= $where."= 1 and ";
		array_push($rule_input,$where);
	}
	$qry.="1=1";
	$data= mysqli_query($conn,$qry);
	$id='';
	$rule= array(
		array("G001","G006","G014","G017"),
		array("G001","G002","G011","G014"),
		array("G002","G003","G009","G010"),
		array("G001","G007","G011","G015","G016","G018"), 
		array("G001","G004","G005","G006"), 
		array("G008","G012","G013"));
		
	$status=false;

	for ($i=0; $i <1 ; $i++) {
		$result=($rule_input==$rule[$i]);

		if ($result==true) {
			$status=true;
	}
}
	if($status==true){
		while ($d=mysqli_fetch_array($data)) {
			$id=$d['id_rulecheck'];
		}

		$cari_penyakit="select * from tb_penyakit where id = '$id' ";
		$db=mysqli_query($conn,$cari_penyakit);

		while ($d=mysqli_fetch_array($db)) {
			$kode_penyakit=$d['kode_penyakit'];
			$nama_penyakit=$d['nama_penyakit'];
			$penyebab=$d['penyebab'];
			$saran=$d['saran'];
				
			include 'hasil.php';
		}

	}else{
			include 'error.php';
	
}

}


?>
