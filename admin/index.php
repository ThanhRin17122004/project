<?php
    session_start();
    if (isset($_SESSION['ten_dang_nhap'])&&($_SESSION['ten_dang_nhap']['role'])==0){
        header('Location: /');
    }else if (!isset($_SESSION['ten_dang_nhap'])){
        header('Location: /');
    }
?>
<?php
    include "../model/pdo.php";
    include "header.php";
    include "../model/danhmuc.php";
    include "../model/monan.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/datban.php";

    if (isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            case'adddm':
                $tenloai_news = [];
                //kiểm tra người dùng có click vào nút add hay k
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    if (empty($tenloai)) {
                        $tenloai_news[] = "Tên danh mục không được để trống.";   
                    }else{
                        $tenloai_news[] = "Thêm thành công";
                        insert_danhmuc($tenloai);
                    }
                }
                include "danhmuc/add.php";
                break;
                case'listdm':
                    $listdanhmuc=loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;
                case "xoadm":
                    if (isset($_GET['id'])&&($_GET['id']>0)){
                        delete_danhmuc($_GET['id']);
                        $thongbao="Xóa thành công.";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;
                case "suadm":
                    if (isset($_GET["id"])&&($_GET["id"]> 0)){
                        $dm = loadone_danhmuc($_GET["id"]);
                        
                    }
                    include "danhmuc/update.php";
                    break;
                case "updatedm":
                    if (isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $tenloai=$_POST['tenloai'];
                        $id=$_POST['id'];
                        update_danhmuc($id,$tenloai);
                        $thongbao="Cập nhật thành công.";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;





        //CONTROLLER MÓN ĂN     
        case'addma':
            //kiểm tra người dùng có click vào nút add hay k
            
            if (isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $iddm=$_POST['iddm'];
                $tenmonan=$_POST['tenmonan'];
                $gia=$_POST['gia'];
                $hinh=$_FILES['hinh']['name'];
                $target_dir="../upload/";
                $target_file= $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                    // echo "the file". htmlspecialchars(basename($_FILES["hinh"]["name"]))."has been uploaded.";
                }else{
                     //echo "sorry, there was an error uploading your file.";
                }
                $mota=$_POST['mota'];
                insert_monan($tenmonan,$gia,$hinh,$mota,$iddm);
                $thongbao="Thêm thành công.";
            }
            $listdanhmuc=loadall_danhmuc();
            include "monan/add.php";
            break;
            case'listma':
                if (isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listmonan=loadall_monan($kyw,$iddm);
                include "monan/list.php";
                break;
            case "xoama":
                if (isset($_GET['id'])&&($_GET['id']>0)){
                    delete_monan($_GET['id']);
                    $thongbao="Xóa thành công.";
                }
                $listmonan=loadall_monan("",0);
                include "monan/list.php";
                break;
            case "suama":
                if (isset($_GET["id"])&&($_GET["id"]> 0)){
                    $monan = loadone_monan($_GET["id"]);
                }
                $listdanhmuc=loadall_danhmuc();
                include "monan/update.php";
                break;
            case "updatema":
                if (isset($_POST['capnhap'])&&($_POST['capnhap'])){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tenmonan=$_POST['tenmonan'];
                    $gia=$_POST['gia'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir="../upload/";
                    $target_file= $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                        // echo "the file". htmlspecialchars(basename($_FILES["hinh"]["name"]))."has been uploaded.";
                    }else{
                        //echo "sorry, there was an error uploading your file.";
                    }
                    
                    update_monan($id,$iddm,$tenmonan,$gia,$hinh,$mota);
                    $thongbao="Cập nhật thành công.";
                }
                $listdanhmuc=loadall_danhmuc();
                $listmonan=loadall_monan("",0);
                include "monan/list.php";
                break; 
            // DANH SÁCH KHÁCH HÀNG  
            case 'dskh':
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'xoatk':
                if (isset($_GET['id']) && ($_GET['id']>0)){
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            //DANH SÁCH BÌNH LUẬN
            case 'dsbl':
                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            case 'xoabl':
                if (isset($_GET['id']) && ($_GET['id']>0)){
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;   
            
            //Đặt bàn
            case 'adddb' :
                $listdatban = loadall_datban();
                include "datban/list.php";
                break;
            case'listdb':
                $listdatban=loadall_datban();
                include "datban/list.php";
                break;
            case "xoadb":
                if (isset($_GET['id_dat_ban'])&&($_GET['id_dat_ban']>0)){
                    delete_datban($_GET['id_dat_ban']);
                    $thongbao="Hủy thành công.";
                }
                $listdatban=loadall_datban();
                include "datban/list.php";
                break;
                case "suadb":
                    if (isset($_GET["id_dat_ban"])&&($_GET["id_dat_ban"]> 0)){
                        $datban = loadone_datban($_GET["id_dat_ban"]);
                    }
                    $listdatban=loadall_datban();
                    include "datban/update.php";
                    break;
                case "updatedatban":
                    if (isset($_POST['capnhap'])&&($_POST['capnhap'])){
                        $id=$_POST['id'];
                        $ten_dang_nhap=$_POST['ten_dang_nhap'];
                        $ngay_dat=$_POST['ngay_dat'];
                        $gio_dat=$_POST['gio_dat'];
                        $so_nguoi=$_POST['so_nguoi'];
                        $trang_thai_don=$_POST['trang_thai'];
                        update_datban($id,$ten_dang_nhap,$ngay_dat,$gio_dat,$so_nguoi,$trang_thai_don);
                        $thongbao="Cập nhật thành công.";
                    }
                    $listdatban=loadall_datban();
                    include "datban/list.php";
                    break; 
        default:    
            include "home.php";
            break;  
        }

    }else{
        include "home.php";
    }

    include "footer.php";
?>