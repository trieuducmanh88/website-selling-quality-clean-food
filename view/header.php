<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./view/img_sp/logo-footer.webp" style="width: 20px; height: 20px;">
    <title>Trang chủ Freshing</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/chiTietSp.css">
    <link rel="stylesheet" href="view/css/danhmuc.css">
    <link rel="stylesheet" href="view/css/login.css">
    <link rel="stylesheet" href="view/css/login2.css">
    <link rel="stylesheet" href="view/css/giohang.css">
    <link rel="stylesheet" href="view/css/phuongthuctt.css">
    <link rel="stylesheet" href="view/css/billcomfirm.css">

    <link rel="stylesheet" href="view/css/taikhoan.css">
    <link rel="stylesheet" href="view/css/showtk.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <section class="container">
        <header>
            <div class="logo"><a href="index.php"><img src="./view/img_sp/logo-footer.webp" alt="" width="110px" height="60px" ></a></div>
            <form action="index.php?act=danhmucct" style="margin-left: 40px; width: 500px; height: 20px; display: flex;  outline: none; border: 1px solid #08672A ; border-radius: 10px; padding: 5px;" method="post"  >
                <button type="submit" name="timkiem" style="outline: none; border: none; margin-right: 20px; margin-left: 5px;"><img src="./view/img_sp/icons8-search-50.png" alt="" height="100%" width="20px" ></button>
                <input type="text" name="kyw" placeholder="Tìm theo tên sản phẩm" style="outline: none; border: none; width: 90%; padding-right: 250px;">
            </form>
            <button class="gio_hang"><a href="index.php?act=giohang"><img src="./view/img_sp/giỏ hàng.jpg" alt="" height="100%" width="100%"></a></button>
            <?php 
            
            //    if(isset($_SESSION['user'])){
            //     extract($_SESSION['user']);
            //         echo '<div id="username"><a href="index.php?act=xuatthongtintk&idUser='.$idUser.'"><i class="fa-solid fa-user"></i></a>  '.$user.'<a href="index.php?act=dangxuat"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></div>';
            //    } else {
                echo '<div id="nut">
                <button class="nut_dk_dn"><a href="index.php?act=dangky">Đăng kí</a></button>
                <button class="nut_dk_dn"><a href="index.php?act=dangnhap">Đăng Nhập</a></button></div>';
             ?>
        </header>
        
        <nav>
            <ul>
                <li id="menu_danhMuc"> <img src="./view/img_sp/danhmucj.jpg" alt="" width="30px" height="20px"> Danh Mục Sản Phẩm
                    <ul>
                        <li>Thực Phẩm Tươi Sống
                            <ul>
                                <li><a href="">Thịt Sống</a></li>
                                <li><a href="">Thủy Sản,Hải Sản</a></li>
                                <li><a href="">Rau Tươi</a></li>
                                <li><a href="">Các Loại Củ</a></li>
                            </ul>
                        </li>
                        <li>Thực Phẩm Sấy
                            <ul>
                                <li><a href="">Hải Sản Khô</a></li>
                                <li><a href="">Thịt Sấy</a></li>
                                <li><a href="">Các Loại Quả Sấy</a></li>
                            </ul>
                        </li>
                        <li><a href="">Trứng - Sữa</a></li>
                        <li><a href="">Gia vị</a></li>
                        <li><a href="">Sản Phẩm dinh dưỡng</a></li>
                    </ul>
                </li>
                <li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
                <li><a href="index.php?act=mybill">Kiểm Tra Đơn Hàng</a></li>
                <li><a href="index.php?act=lienhe">Liên Hệ</a></li>
                <li><a href="index.php?act=trahang">Trả Hàng</a></li>
                <li><a href="index.php?act=hoidap">Hỏi Đáp</a></li>
            </ul>
        </nav>