<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css"/>
</head>
<body>

<form method="post" class="form" action="register.php">

<h2 style='text-align:center; color:rgb(212, 60, 60);'>ĐĂNG KÝ THÔNG TIN</h2>
Username: <input type="text" name="username" value="" required>
Password: <input type="password" name="password" value="" required/>

Email: <input type="email" name="email" value="" required/>

Phone: <input type="text" name="phone" value="" required/>

<input type="submit" name="dangky" value="Đăng Ký"/>
<a href='../dangnhap/login.php' title='Đăng ký'>Đăng nhập</a> 
<?php require 'xuly.php';?>
</form>

</body>
</html>