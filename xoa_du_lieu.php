<?php
// Kết nối đến cơ sở dữ liệu
$ketnoi = mysqli_connect("localhost", "root", "", "webcoffee");

// Kiểm tra kết nối
if (!$ketnoi) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Thiết lập mã kết nối UTF-8
mysqli_query($ketnoi, "set names utf8");

// Lấy giá trị idgh từ query string (GET parameters)
$username=$_GET['id'];
// Xây dựng truy vấn xóa dữ liệu
$query = "DELETE FROM giohang WHERE username = '$username'";
// Thực thi truy vấn xóa dữ liệu
if (mysqli_query($ketnoi, $query)) {
    // Đóng kết nối đến cơ sở dữ liệu trước khi chuyển hướng
    mysqli_close($ketnoi);
    // Hiển thị thông báo và chuyển hướng trang bằng JavaScript
    echo '<script>
            alert("Đặt hàng thành công!!");
            window.location="giohang.php?id='.$username.'";
          </script>';
} else {
    // Xử lý lỗi nếu truy vấn không thành công
    echo "Lỗi trong quá trình xóa dữ liệu: " . mysqli_error($ketnoi);
}
?>
