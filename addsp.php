
<?php
// Kết nối dữ liệu
$ketnoi = mysqli_connect("localhost", "root", "", "webcoffee");
mysqli_query($ketnoi, "set names utf8");
$query = mysqli_query($ketnoi, "SELECT * FROM sanpham" );

$username=$_GET['id'];
$idsp=$_GET['idsp'];
$query2 = mysqli_query($ketnoi, "SELECT *FROM sanpham where idsp='$idsp'" );
$row = mysqli_fetch_array($query2);

	$sql="insert into giohang values('','$username','$idsp','1')";

mysqli_query($ketnoi,$sql);
mysqli_close($ketnoi);
echo'<script>
	 alert("Thêm mới thành công!!")
	  window.location="sanpham/'.$row['loaisp'].'.php?id='.$username.'";
	</script>';
?>
