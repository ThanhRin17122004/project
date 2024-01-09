    <div class="dang_ki">
        <div class="tieu_de">ĐĂNG KÍ THÀNH VIÊN</div>
        <div class="form_dang_ki">
            <form action="index.php?act=dangki" method="post" class="">
                Tên đăng nhập: <br>
                <input type="text" name="ten_dang_nhap"> <br>
                <?php
                // Hiển thị lỗi nếu có
                if (!empty($ten_dang_nhap_news)) {
                    foreach ($ten_dang_nhap_news as $ten_dang_nhap_new) {
                        echo '<span class="color"> '.$ten_dang_nhap_new.' </span><br>';
                    }
                }
                ?>
                Mật khẩu: <br>
                <input type="password" name="pass" ><br>
                <?php
                // Hiển thị lỗi nếu có
                if (!empty($pass_news)) {
                    foreach ($pass_news as $pass_new) {
                        echo '<span class="color"> '.$pass_new.' </span><br>';
                    }
                }
                ?>
                Xác nhận mật khẩu: <br>
                <input type="password" name="xac_nhan_pass"><br>
                <?php
                // Hiển thị lỗi nếu có
                if (!empty($xac_nhan_pass_news)) {
                    foreach ($xac_nhan_pass_news as $xac_nhan_pass_new) {
                        echo '<span class="color"> '.$xac_nhan_pass_new.' </span><br>';
                    }
                }
                ?>
                Họ và tên: <br>
                <input type="text" name="ho_va_ten"><br>
                <?php
                    // Hiển thị lỗi nếu có
                    if (!empty($ho_va_ten_news)) {
                        foreach ($ho_va_ten_news as $ho_va_ten_new) {
                            echo '<span class="color"> '.$ho_va_ten_new.' </span><br>';
                        }
                    }
                ?>
                Email:<br>
                <input type="email" name="email"><br>
                <?php
                    // Hiển thị lỗi nếu có
                    if (!empty($email_news)) {
                        foreach ($email_news as $email_new) {
                            echo '<span class="color"> '.$email_new.' </span><br>';
                        }
                    }
                ?>
                Hình: <br>
                <input type="file" name="hinh"> <br>
                <input type="submit" value="Đăng kí" name="dangki">
                <input type="reset" value="Nhập lại"> 
            </form>
            <?php
                if (isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
            ?>
        </div>
    </div>