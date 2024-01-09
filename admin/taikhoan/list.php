<div class="main_small">
                <div class="noi_dung">
                    <p>DANH SÁCH DANH MỤC MÓN ĂN</p>
                </div>
                <div class="form_danh_sach">
                    <div class="row mb10 formdanhsachloaihang">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã tài khoản</th>
                            <th>Tên đăng nhập</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>hình</th>
                            <th>Vai trò</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listtaikhoan as $taikhoan){
                                extract($taikhoan);
                                $xoatk="index.php?act=xoatk&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$ten_dang_nhap.'</td>
                                <td>'.$ho_va_ten.'</td>
                                <td>'.$email.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$role.'</td>
                                <td><a href="'.$xoatk.'"><input type="button" value="Xóa"  class="xoa"></a></td>
                            </tr>';
                            }
                       ?>
                    </table>
                    </div>
                    <!-- <div class="form_button">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                    </div> -->
                </div>
            </div>
            
        </main>
    </header>