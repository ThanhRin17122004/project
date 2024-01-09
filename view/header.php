<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./view/css/stype.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fasthand&family=Unna:ital@1&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/view/images/logo-Sunhomes-BBQ-01.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fasthand&family=Unna:ital@1&family=Whisper&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dangnhap">
        <!-- <a href="index.php?act=dangnhap"><input type="button" value="Đăng nhập"></a> -->
        <?php
                            if (isset($_SESSION['ten_dang_nhap'])){
                                extract($_SESSION['ten_dang_nhap']);
                        ?>
                            <div class="group-avatar">
                            <div class="group-ten">
                                <h3><i class="fa-solid fa-user"></i><?=$ho_va_ten?></h3>
                            </div>
                            <div class="group-action">
                                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                    <a href="index.php?act=lichsudatban">Lịch sử đặt bàn</a>
                                <!-- XÁC NHẬN ADMIN -->
                                <?php if ($role==1){?>
                                    <a href="admin/index.php">Đăng nhập Amin</a>
                                <?php } ?>    
                                <button class="dangxuat"><a href="index.php?act=thoat">Đăng xuất</a></button>
                            </div>
                            </div>
                        <?php        
                            }else{
                        ?>
                        <div class="buton_dgnh">
                        <a href="index.php?act=dangnhap"><input type="button" value="Đăng nhập" class="button_dang_nhapp"></a>
                        </div>
                        <!-- <div class="dangnhap">
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name = "ten_dang_nhap" id="">
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                                <input type="password" name="pass" id=""> <br>
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" id=""> Ghi nhớ tài khoản
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap" class="submit">
                            </div>
                        </form>
                        <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                        <li><a href="index.php?act=dangki">Đăng kí thành viên</a></li>
                        </div> -->
                        
                        <?php }?>
                    </div>
    </div>
    <header>
        <div class="index">
            <div class="menu">
                <div class="img_trang_chu">
                    <img src="./view/images/logo-Sunhomes-BBQ-01.png" alt="" width="325px" height="84px">
                </div>
                <div class="dm_trang_chu">
                    <ul>
                        <li><a href="../index.php">Trang chủ</a></li>
                        <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                        <li><a href="index.php?act=datban">Đặt bàn</a</li>
                        <li><a href="index.php?act=thucdon">Thực đơn</a></li>
                        <!-- <li><a href="#">Tuyển dụng</a></li>
                        <li><a href="#">Tin tức</a></li> -->
                        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        