<?php
    session_start();
    include "../../model/binhluan.php";
    include "../../model/pdo.php"; 
    // include "admin/model/pdo.php";
    // include "admin/model/binhluan.php";
    $idpro=$_REQUEST['idpro'];
    $dsbl= loadall_binhluan($idpro);
    if (isset($_SESSION['ten_dang_nhap'])&&($_SESSION['ten_dang_nhap'])){
        $iduser = $_SESSION['ten_dang_nhap']['ten_dang_nhap'];
    }

    // var_dump($iduser);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/binhluan.css">
    <style>
        .boxcontentt{
            border-left: 1px black solid;
            /* border-top: 1px black solid; */
            border-right: 1px black  solid;
            border-bottom: 1px black  solid;
            /* border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px; */
            border-radius: 0 0 10px 10px;
            min-height: 200px;
            padding: 20px;
            background-color: white;
            margin: 0px 40px;
        }
        .noidung{
            width: 70%;
        }
        .iduser{
            width: 15%;
            text-align: center;
        }
        .ngaybinhluan{
            width: 15%;
            text-align: center;
            padding-left: 28px;
        }
        .binhluaninput{
        border-radius: 5px;
        padding: 10px 10px;
        background-color: white;
        border: 2px  solid black;
        margin-bottom: 10px;
        margin-top: 10px;
        margin: 0 auto;
        }
        .binhluaninput:hover{
            color: red;
        }
        .inputbinhluan{
        width: 87%;
        border: 2px solid black;
        padding: 10px 10px;
        border-radius: 5px;
        margin-top: 10px;
        margin-left: 44px;
        }
        .tieu_de_binh_luan{
            padding: 10px 20px;
            border: 1px solid black;
            margin: 0px 40px;
            border-top: 1px solid black;
            border-right: 1px solid black;
            border-left: 1px solid black;
            border-radius: 10px 10px 0 0;
        }.color{
            color: red;
            margin-top: 10px;
            margin-left: 45px;
        }
    </style>
</head>
<body>
    <div class="">
        <div class="tieu_de_binh_luan"><b> Bình luận</b></div>
        <div class="boxcontentt">
            <table class="binhluan">
                <ul>
                    <?php 
                        foreach($dsbl as $bl){
                            extract($bl);
                            echo ' <tr><td class="noidung">'.$noidung.'</td>';
                            echo ' <td class="iduser">'.$iduser.'</td>';
                            echo ' <td class="ngaybinhluan">'.$ngaybinhluan.'</td></tr>';
                        }
                    ?>
                </ul>
            </table>
        </div>


        
        <!-- ADD BÌNH LUẬN -->
        <div class="binhluanform">
            
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <div class="form_binh_luan">
                    <input type="text" name="noidung" id="" class="inputbinhluan">
                    <?php
                        if (isset($_SESSION['ten_dang_nhap'])&&($_SESSION['ten_dang_nhap'])){
                            $type = 'submit';
                            echo '<input type="'.$type.'" name="guibinhluan" value="Gửi bình luận" class="binhluaninput"><br>';
                        }else{
                            $type = 'button';
                            echo '<input type="'.$type.'" name="guibinhluan" value="Gửi bình luận" class="binhluaninput"><br>';
                            echo '<span class="color">Vui lòng đăng nhập để bình luận.</span>';
                        }
                        
                    ?>
                </div>
            </form>
        </div>
        <?php
            if (isset($_SESSION['ten_dang_nhap'])&&($_SESSION['ten_dang_nhap'])){
                if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $noidung = $_POST['noidung'];
                    $idpro = $_POST['idpro'];   
                    $iduser = $_SESSION['ten_dang_nhap']['ten_dang_nhap'];
                    $ngaybinhluan=date('h:i:sa d/m/y');
                    insert_binhluan ($noidung,$iduser,$idpro,$ngaybinhluan);
                    header("Location:".$_SERVER['HTTP_REFERER']);
                }
            }
        ?>
    </div>
</body>
</html>