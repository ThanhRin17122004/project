<style>
    .trang_thai_0{
        color: red;
        font-size: 16px;
    }
    .trang_thai_1{
        color: green;
        font-size: 16px;
    }
</style>
<div class="main_small">
                <div class="noi_dung">
                    <p>DANH SÁCH ĐẶT BÀN</p>
                </div>
                <div class="form_danh_sach">
                    <div class="row mb10 formdanhsachloaihang">
                        <table>
                            <tr>
                                <th></th>
                                <th>ID đặt bàn</th>
                                <th>Tên đăng nhập</th>
                                <th>Email</th>
                                <th>Ngày đặt</th>
                                <th>Gio đặt</th>
                                <th>Kiểu bàn</th>
                                <th>Số người</th>
                                <th>trạng thái</th>
                                <th></th>
                                <!-- <th></th> -->
                            </tr>
                            <?php
                                foreach($listdatban as $datban){
                                    extract($datban);
                                    if ($trang_thai==0){
                                        $trang_thai_don = '<b class="blue">Đang chờ xử lí</b>';
                                    }else if ($trang_thai==1){
                                        $trang_thai_don = '<b class="red">Hủy</b>';
                                    }else {
                                        $trang_thai_don = '<b class="green">Đặt bàn thành công</b>';
                                    }
                                    $suadb="index.php?act=suadb&id_dat_ban=".$id_dat_ban;
                                    $xoadb="index.php?act=xoadb&id_dat_ban=".$id_dat_ban;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id_dat_ban.'</td>
                                    <td>'.$ten_dang_nhap.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$ngay_dat.'</td>
                                    <td>'.$gio_dat.'</td>
                                    <td>'.$kieu_ban.'</td>
                                    <td>'.$so_nguoi.'</td>
                                    <td>'.$trang_thai_don.'</td>
                                    <td><a href="'.$suadb.'"><input type="button" value="Sửa" class="xoa"></a></td>
                                </tr>';
                                }
                            ?>
                            <!-- <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>001</td>
                                <td>Đồng hồ</td>
                                <td><input type="button" value="Sửa" class="sua"> <input type="button" value="Xóa" class="xoa"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>002</td>
                                <td>Đồng hồ</td>
                                <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
                            </tr> -->
                        </table>
                    </div>
                    <?php
                        if (isset($thongbao)&&($thongbao!=""))
                            echo '<div class="thong_bao">'.$thongbao.'</div>'; 
                        ?>
                    <div class="form_button">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <!-- <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a> -->
                    </div>
                    
                </div>
            </div>
            
        </main>
    </header>