<?php
    include "../model/datban.php";
    include "../model/pdo.php";
    include "../global.php";
    include "../model/taikhoan.php";
    include "../model/monan.php";
    include "../model/danhmuc.php";
    session_start();
    echo '<pre>';
    // print_r($_SESSION);
    echo '</pre>';
    if (isset($_SESSION['data'])&&($_SESSION['data'])){
        $ten_dang_nhap = $_SESSION['data']['name'];
        $email = $_SESSION['data']['email'];
        $ngay_dat = $_SESSION['data']['date'];
        $so_nguoi = $_SESSION['data']['number'];
        $gio = $_SESSION['data']['gio'];
        $kieu_ban = $_SESSION ['data']['kieu_ban'];
        $id_tai_khoan = $_SESSION['ten_dang_nhap']['id'];
        $id_dat_ban =  insertDatBan($id_tai_khoan,$ten_dang_nhap, $ngay_dat, $gio,$kieu_ban,$so_nguoi,$trang_thai=0);
        inserthoadon($id_tai_khoan,$id_dat_ban, $ngay_dat);
        $_SESSION['orderSuccessMessage'] = 'dat ban thanh cong';
        header('Location: /?act=datban');
    }
?>