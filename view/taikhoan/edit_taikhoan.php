<div class="dang_ki">
        <div class="tieu_de">CẬP NHẬT TÀI KHOẢN THÀNH VIÊN</div>
        <div class="form_dang_ki">
        <?php
            if (isset($_SESSION['ten_dang_nhap'])&&(is_array($_SESSION['ten_dang_nhap']))){
                extract($_SESSION['ten_dang_nhap']);
            }
        ?>
            <form action="index.php?act=edit_taikhoan" method="post" class="">
                Tên đăng nhập: <br>
                <input type="text" name="ten_dang_nhap"value="<?=$ten_dang_nhap?>"> <br>
                Họ và tên: <br>
                <input type="text" name="ho_va_ten"  value="<?=$ho_va_ten?>"><br>
                Email:<br>
                <input type="email" name="email" value="<?=$email?>"><br>
                Hình: <br>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="file" name="hinh" value="<?=$hinh?>"> <br>
                <input type="submit" value="Cập nhật" name="capnhat">
                <input type="reset" value="Nhập lại"> 
            </form>
            <?php
                if (isset($thongbao)&&($thongbao!="")){
                    echo $thongbao; 
                } 
            ?>
            <?php
                // if (empty(empty($ten_dang_nhap_news)&& empty($email_news)&& empty($ho_va_ten_news )&& empty($pass_news)&& empty($xac_nhan_pass_news))){
                //     echo '<span class="color">Đăng kí thành công</span>';
                // }else{
                //     // echo '<span class="color">Đăng kí thất bại</span>';
                // }
            ?>
        </div>
    </div>