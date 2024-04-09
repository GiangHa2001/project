<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> THE FAST COFFEE</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css.css">
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="../assets/vendors/jquery.min.js"></script>
    <script src="../assets/owlcarousel/owl.carousel.js"></script>
</head>
<body>
<?php 
// Kết nối dữ liệu
$ketnoi = mysqli_connect("localhost", "root", "", "webcoffee");
mysqli_query($ketnoi, "set names utf8");

// Check if 'idsp' key exists in $_GET
$idsp = isset($_GET['idsp']) ? $_GET['idsp'] : '';
$username=$_GET['id'];
$query = mysqli_query($ketnoi, "SELECT * FROM sanpham WHERE loaisp='trasua'" );
?>

<section class="header">
<div class="container-sm py-3 ">
            <div class="row">
                <div class="col-md-3 ">
                    <div class="row">
                            <img src="../img/hinhchay/2.jpg" alt="logo" class="img-fluid">
                    </div>       
                </div>
                <div class="col-md-4">
                <form action="timkiemsp.php" method="get" >
                    <input type="hidden" name="id" value="<?php echo $username;?>">
                    <div class="input-group mb-3" style='padding-top:20px;'>
                        <input id="txttukhoa" name="txttukhoa" type="text" class="form-control" placeholder="Từ khóa tìm kiếm" aria-label="Từ khóa tìm kiếm" aria-describedby="basic-addon2">
                       <input class="nut" type="submit" value="Tìm">
                      </div>    
                </form>    
                </div>
               <div style="padding-left:10px;" class="col-md-4">
                <div class="row">
                  <div class="col">
                    <a href="tel:0369352144" style='text-decoration:none; color:black;'>
                      <div class="row">                     
                      <div class="col-3">                     
                        <div class="fs-3 text-danger">
                          <i class="fa-solid fa-phone-volume"></i>
                      </div>
                        </div>
                      <div style="font: Times New Roman;"  class="col-9">Tư vấn hỗ trợ<br>
                    <strong class="text-danger">19001515</strong></div>
                    </div></a>
                  </div>
                 
                  <div class="col"> 
                    <a href="dangnhap/login.php" style='text-decoration:none; color:black;'>                  
                    <div class="row">
                      <div class="col-3">
                        <div class="fs-3 text-danger">
                        <i class="fa-solid fa-users"></i>
                        </div>
                      </div>
                      <div style="font: Times New Roman;" class="col-9">Xin chào<br>
                      <?php
                      $username=$_GET['id'];
                      ?>
                    <strong class="text-danger"><?php 
                    if($username!="")
                    echo"$username"; 
                  else echo"Đăng nhập";
                  ?></strong></div>
               
                    </div>
                  </a>
                  </div>
                </div>
               </div>
               <div class="col-md-1">
                    <div class="row">
                          <div style="padding-left:60px; padding-top:10px;" class="col">
                            <a href="../giohang.php?id=<?php echo"$username";?>" class="position-relative">
                                <span class="fs-2"><i class="fa-solid fa-cart-shopping" style="color: #dc3545;"></i></span>
                            </a>
                        </div>
                    </div>    
                </div> 
            </div>
        </div>
    </section>
    <section class="menu bg-danger"> 
        <div class="container-md">
            <div class="row">
                <div class="col-3 text-white py-3"> Danh mục sản phẩm</div>
                <div class="col-9">
                    <nav class="navbar navbar-expand-lg bg-danger">
                        <div class="container-fluid">
                          <a class="navbar-brand d-none" href="#">Navbar</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link text-white active" aria-current="page" href="../user.php?id=<?php echo"$username";?>">Trang chủ</a>
                              </li>
                              <li class="nav-item">
                                <a href="../gioithieu.php?id=<?php echo"$username";?>" class="nav-link text-white " >Giới thiệu</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a href="#" class="nav-link text-white dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Sản phẩm
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="tra.php?id=<?php echo"$username";?>">Trà</a></li>
                                  <li><a class="dropdown-item" href="trasua.php?id=<?php echo"$username";?>">Trà sữa</a></li>
                                  <li><a class="dropdown-item" href="latte.php?id=<?php echo"$username";?>">Món Khác</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white active" aria-current="page" href="../tintuc.php?id=<?php echo"$username";?>">Tin tức</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white active" aria-current="page" href="../lienhe.php?id=<?php echo"$username";?>">Liên hệ</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </section>
    <br/>
    <section class="manicontent">
        <div class="container-md">
        <div class="slider" class="sanpham">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../img/hinhchay/hinh3.jpg" class="d-block w-100" alt="nen3">
                  </div>
                  <div class="carousel-item">
                    <img src="../img/hinhchay/hinh4.jpg" class="d-block w-100" alt="nen1">
                  </div>
                  <div class="carousel-item">
                    <img src="../img/hinhchay/hinh2.jpg" class="d-block w-100" alt="nen2">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="product-list-md-3">
        <div class="product-title border-bottom">
            <strong class="bg-danger text-white fs-4 ">MILK TEA</strong>
        </div>
        <div class="product-list-md-s py-3">
    <div class="row">
        <?php
         while ($row = mysqli_fetch_array($query)) {
          echo "<div class='col-md-3' align='center'>";
          echo "<img src='../img/sanpham/" . $row['images'] . "' width='200px' height='auto'><br>";
          echo "<c style='text-transform: uppercase; font: 20px Times New Roman;'>" . $row['tensp'] . "</c><br>";
          echo "<a style='color:#FF3333;'>" . $row['gia'] . "<sup> đ</sup></a>  <br>";
          echo "
          <a href='../addsp.php?id=$username&idsp=". $row['idsp'] ."'>
          <input style='float: center; border: 5px inset #d63745; background-color: #d63745; color: antiquewhite; width:80%' type='submit' value='MUA'></a>";
          echo "</div>";
      }
        ?>
    </div>
</div>

        <!---->

    </div>
      </div>
        <!--ket thuc hinh chay Slider-->  
    
        </section>
        <br/>
    <section class="footer bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h5>COFFEE</h5>
                <p><i><small>Tình yêu như ly cà phê không đường, trải qua bao nhiêu vị đắng của chông gai rồi sẽ trở về với vị ngọt đến lịm người.</small></i></p>
                </div>
                <div class="col-3"> <h5>TƯ VẤN KHÁCH HÀNG</h5>
                    <ul>
                    <li><a href="../cauhoicf.php"><i class="fa-brands fa-google-wallet"></i> Câu hỏi về chuẩn bị cà phê</a></li>
                        <li><a href="../lienhe.php"><i class="fa-brands fa-google-wallet"></i> Liên hệ với chúng tôi</a></li>
                    </ul>
                </div>
                <div class="col-4"> <h5>OPEN HOURS</h5>
                    <p> Thời gian mở cửa 7:00 - 22:00 </p>
                </div>
            </div>
            <hr/>
            <div class="row">
            <div class="col-md-6">
                  <div>
                    <h5 >THIÊN ĐƯỜNG CỦA ĐỒ UỐNG</h5>
                    <p class="m-0">Địa chỉ: <i>101 Lý Tự Trọng</i><br/></p>
                    <p class="m-0"> Hotline: <i>0963 985 374</i><br/></p>
                    <p class="m-0">Email:<i> thefastcoffee@gmail.com</i></p>
                  </div>
                  
                </div>
                <div class="col-md-6" style='padding-top: 30px;'>
                   <h5> NHẬN TIN KHUYẾN MÃI</h5>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nhập email của bạn" aria-label="Nhập email của bạn" aria-describedby="basic-addon2">
                        <span class="input-group-text bg-danger text-white" id="basic-addon2" onclick="dangky()">Đăng ký</span>
                      </div> 
                     <div>
                     <span class="box border border-primary mr-3"><a href="https://www.facebook.com/profile.php?id=61558181249879" target="_blank"><i class="fa-brands fa-facebook"></i></a></span>
                        <span class="box border border-primary mr-3"><a href="http://localhost/mini/index.php" target="_blank"><i class="fa-brands fa-google"></i></a></span>
                     </div> 
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-6">Bản quyền thuộc về The Fast Coffee</div>
            </div>

        </div>

    </section>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>
      $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
          loop: true,
          margin: 10,
          nav: false,
          dots:false,
          responsiveClass: true,
          responsive: {
            0: {
              items: 2,
            },
            600: {
              items: 4,
            },
            1000: {
              items: 5,
              loop: false,
              margin: 20,
            }
          }
        })
      })
    </script>
    <script>
    function dangky(){
        debugger;
        //1. Nhập thông tin
        var ma = document.querySelector('.form-control').value; 
        //2. Kiểm tra 
        var regex = /\w*@\w*.(.com|edu.vn)/gm;
        var ketqua = regex.test(ma);
        if (ketqua == false) {
            alert('Chúng tôi đang xử lý thông tin'); 
        } else {
            alert('Bạn chưa nhập thông tin, vui lòng nhập lại'); 
        }
    }
</script>
</body>
</html>