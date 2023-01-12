<?php
include 'koneksi.php';
session_start();

?>  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<!-- <body bgcolor="#557B83"> -->

<div class="form-container">
<h1 align="center">REGISTRASI</h1>
<form method="post" action="" enctype="multipart/form-data">
<label>Username</label><br>

<input type="text" name="aditya_nik" placeholder="masukan username" >
<br>
<br>

<label>Password</label><br>
<input type="text" name="aditya_nama_lengkap" placeholder="masukan password" required>
<br>
<br>

<button name="submit" type="submit" class="btn">Simpan</button>
<br>
<br>

<p class="sign-up">Sudah punya akun?</p><a href="login.php">Login</a>
</form>

</body>
</html>