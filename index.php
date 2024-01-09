<?php
    session_start();
    include "./model/pdo.php";
    include "view/header.php";
    include "global.php";
    include "./model/taikhoan.php";
    include "./model/monan.php";
    include "./model/danhmuc.php";
    include "./model/datban.php";
    $monan_new = loadall_monan_home();
    $dsdm=loadall_danhmuc();
    if (isset($_GET['act'])&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act){
                case 'dangki': 
                    $ten_dang_nhap_news = [];
                    $email_news=[];
                    $ho_va_ten_news=[];
                    $pass_news=[];
                    $xac_nhan_pass_news=[];
                    $ten_dang_nhap = $pass = $xac_nhan_pass = $ho_va_ten = $email = "";
                    if (isset($_POST['dangki'])&&($_POST['dangki'])){
                        $ten_dang_nhap= $_POST['ten_dang_nhap'];
                        $pass = $_POST['pass'];
                        $xac_nhan_pass = $_POST['xac_nhan_pass'];
                        $ho_va_ten = $_POST['ho_va_ten'];
                        $email = $_POST['email'];
                        $hinh= $_POST['hinh'];
                        // $thongbao =  "Đăng kí thành công.";
                        // Kiểm tra tính hợp lệ của tên tài khoản
                        if (empty($ten_dang_nhap)) {
                            $ten_dang_nhap_news[] = "Tên tài khoản không được để trống.";
                        }
                        
                        // Kiểm tra tính hợp lệ của email
                        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $email_news[] = "Email không hợp lệ.";
                        }
    
                        // Kiểm tra tính hợp lệ của họ tên
                        if (empty($ho_va_ten)) {
                            $ho_va_ten_news[] = "Họ và tên không được để trống.";
                        }
    
                        // Kiểm tra tính hợp lệ của mật khẩu
                        if (strlen($pass) < 6) {
                            $pass_news[] = "Mật khẩu phải có ít nhất 6 ký tự.";
                        }
    
                        // Kiểm tra tính hợp lệ của xác nhận mật khẩu
                        if ($pass !== $xac_nhan_pass) {
                            $xac_nhan_pass_news[] = "Xác nhận mật khẩu không khớp với mật khẩu.";
                        }
                        if (empty($ten_dang_nhap_news)&& empty($email_news)&& empty($ho_va_ten_news )&& empty($pass_news)&& empty($xac_nhan_pass_news)) {
                            // Thực hiện hành động sau khi đăng ký thành công
                            // Ví dụ: Chuyển hướng đến trang đăng nhập
                            $hasspass=password_hash($pass,PASSWORD_DEFAULT);
                            insert_taikhoan($ten_dang_nhap,$hasspass,$ho_va_ten,$email,$hinh);
                            $thongbao =  "Đăng kí thành công.";
                        }else{
                            $thongbao =  "Đăng kí thất bại.";
                        }
                        
    
                        // insert_taikhoan($ten_dang_nhap,$pass,$xac_nhan_pass,$ho_va_ten,$email,$hinh);
                        // $thongbao =  "Đăng kí thành công.";
                    }
                    include "view/taikhoan/dangki.php";
                break;
                case 'dangnhap':
                    if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                        $ten_dang_nhap= $_POST['ten_dang_nhap'];
                        $pass = $_POST['pass'];
                        $checkuser=checkuser($ten_dang_nhap);

                        if (is_array($checkuser)){
                            if (password_verify($pass,$checkuser['pass'])) {
                                $_SESSION['ten_dang_nhap'] = $checkuser;
                                header('location:index.php');
                            }else{
                                $thongbao = 'mat khau khong dung';
                            }
                            
                            // $thongbao =  "Đăng nhập thành công.";
                        }else{
                            $thongbao='<span class="color">Tài khoản không tồn tại. </span>';
                            echo $thongbao;
                        }
                    }
                    include "view/taikhoan/dangnhap.php";
                   
                break;
            case 'thucdon':
                include "view/thucdon.php";
                break;
            case 'monanct':
                if (isset($_GET['idmonan'])&&($_GET['idmonan']>0)){
                    $id = $_GET['idmonan'];
                    $onemonan = loadone_monan($id);
                    include "view/monanct.php";
                }else{
                    include "view/home.php";
                }
                
            break;
            case 'monan':
                if (isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if (isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm = $_GET['iddm'];
                    
                }else{
                    $iddm=0;
                }
                $dsma = loadall_monan($kyw,$iddm);
                include "view/monan.php";
            break;
            case 'edit_taikhoan':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $ten_dang_nhap= $_POST['ten_dang_nhap'];
                    $ho_va_ten = $_POST['ho_va_ten'];
                    $email = $_POST['email'];
                    $hinh = $_POST['hinh'];
                    $id = $_POST['id'];
                    // echo "cập nhật thành công.";
                    $thongbao ="Cập nhập thành công";
                    update_taikhoan($ten_dang_nhap,$ho_va_ten,$email,$hinh,$id);
                    $_SESSION['ten_dang_nhap']=checkuser($ten_dang_nhap);
                    header('location : index.php?act=edit_taikhoan');
                    
                }
                include "view/taikhoan/edit_taikhoan.php";
                
            break;
            case 'quenmk':
                if (isset($_POST['gui_email'])&&($_POST['gui_email'])){
                    $email = $_POST['email'];
                    $checkemail = checkemail($email);
                    if (is_array($checkemail)){
                        $thongbao = "Mật khẩu của bạn là: ".$checkemail['pass']; 
                    }else{
                        $thongbao = "email không tồn tại.";
                    }
                }
                include "view/taikhoan/quenmk.php";
            break;
            case 'lichsudatban':
                include "view/lichsudatban.php";
            break;
            case 'datban':
                include "view/datban.php";
            break;
            case 'xacnhan':
                include "view/xacnhan.php";
            break;
            case 'thoat':
                session_unset();
                header('location:index.php');
            break;
            case 'gioithieu':
                include "view/gioithieu.php";
            break;
            case 'lienhe':
                include "view/lienhe.php";
            break;
            default:
                include "view/home.php";    
            break;
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
?>