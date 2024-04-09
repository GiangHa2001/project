<?php
// Kết nối dữ liệu
$ketnoi = mysqli_connect("localhost", "root", "", "webcoffee");
mysqli_query($ketnoi, "set names utf8");
$username=$_GET['id'];
$idsp=$_GET['idsp'];
$idgh=$_GET['idgh'];
	$query2="DELETE FROM giohang WHERE idgh='$idgh'";

mysqli_query($ketnoi,$query2);
mysqli_close($ketnoi);
echo'<script>
	 alert("Xóa thành công!!")
	  window.location="giohang.php?id='.$username.'";
	</script>';
?>