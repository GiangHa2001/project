<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
  
//Lấy dữ liệu nhập vào
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
  
//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
if (!$username || !$password) {
echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
  
// mã hóa pasword
// $password = md5($password);
$connect = mysqli_connect ('localhost', 'root', '', 'webcoffee');
mysqli_set_charset($connect, 'UTF8');
//Kiểm tra tên đăng nhập có tồn tại không
$query = mysqli_query($connect, "SELECT * FROM member");
// $result = mysqli_query($connect, $query) or die( mysqli_error($connect));

// if (!$result) {
// echo "Tên đăng nhập hoặc mật khẩu không đúng!";
// } else {
// echo "Đăng nhập thành công!";
// }
  $kt=1;
//Lấy mật khẩu trong database ra
while($row = mysqli_fetch_array($query)){
    if ($password == $row['password']&&$username==$row['username']) { 
    $kt=0;
    }
}
  
//So sánh 2 mật khẩu có trùng khớp hay không
if($kt==1){
echo "Tài khoảng hoặc mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;}

  
//Lưu tên đăng nhập
$_SESSION['username'] = $username;
echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href='../user.php?id=$username'>Login</a>";
die();
$connect->close();
}
?>