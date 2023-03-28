<?php 
include 'prosesdaftar.php'

?>
<br>
	<h1>Form Biodata Pasien</h1>
	<br>


 <?php 
    if($error){
        ?>
        <div class ="alert alert-danger" role="alert"> <?php echo $error ?> </div>
   <?php
    }

    ?>
    <?php 
    if($sukses){
        ?>
        <div class ="alert alert-success" role="alert"> <?php echo $sukses ?> </div>
   <?php
    }

    ?>
	<br>
</div>
	<div class="contact-form">

<form action="tabelkonsul.php" method="post">
	<div class="row-2">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<label> Nama </label>
			<fieldset>
				<input name="nama_user" type="text" class="form-control" id="nama" placeholder="Nama" required>
			</fieldset>

		</div>
		<br>
			<div class="col-lg-12 col-md-12 col-sm-12">
			<label> Jenis Kelamin </label>
		<br>
		<br>

		<select class="form-select" aria-label="Default select example" name="jenis_kelamin">
<option value="">--Pilih--</option>   
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
			
</div>
		<br>
			<div class="col">
			<label> Umur </label>
			<fieldset>
				<input name="umur_user" type="text" class="form-control" id="umur" placeholder="Umur" required>
			</fieldset>
		</div>
		<br>
			<div class="col-lg-12 col-md-12 col-sm-12">
			<label> Alamat </label>
			<fieldset>
				<input name="alamat_user" type="text" class="form-control" id="nama" placeholder="Alamat" required>
			</fieldset>
		</div>
		<br>
		
		<input type="submit" name="simpanuser" value="Simpan" class="btn">

</form>
</div>

</div>


