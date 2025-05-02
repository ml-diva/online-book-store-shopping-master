<?php
	$title = "Administration section";
	require_once "./template/header.php";
?>
	<br><br><center>
	<form class="form-horizontal" method="post" action="admin_verify.php" style="background-color: #BBD8A3; padding:50px;border-radius:5px; width:70%">

		<div class="form-group">
			<center><h1 style="font-style:bold;">Login Page</h1></center><br>
			<label for="name" class="control-label col-md-4">Username </label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Password</label>
			<div class="col-md-4">
				<input type="password" name="pass" class="form-control">
			</div>
		</div><br><br>
		<center><input type="submit" name="submit" class="btn btn-primary" style="background: black;border-radius:15px; font-size:12pt;"></center>
	</form>
</center>
<?php
	require_once "./template/footer.php";
?>