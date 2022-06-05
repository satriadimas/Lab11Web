<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('/login.css');?>">
</head>
<body>

	<h1>Halaman Login</h1>

	<div class="kotak_login">
		<p class="tulisan_login">Sign in</p>

		<form action="" method="post">
			<label>Email address</label>
			<input type="email" name="email" class="form_login" placeholder="Masukan alamat email ..">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Masukan password ..">

			<input type="submit" class="tombol_login" value="LOGIN">
		</form>
		
	</div>


</body>
</html>