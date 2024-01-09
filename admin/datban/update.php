<?php
    if (is_array($datban)){
        extract($datban);
        if ($trang_thai==0){
            $trang_thai_don = '
            <option value="0" selected>Đăng chờ xử lí</option>
            <option value="1">Hủy đơn</option>  
            <option value="2">Đặt thành công</option>
            ';
        }
        else if ($trang_thai==1){
            $trang_thai_don = '
            <option value="0">Đang chờ xử lí</option>
            <option value="1" selected>Hủy đơn</option>
            <option value="2">Đặt thành công</option>';
        }
        else {
            $trang_thai_don = '
            <option value="0">Đang chờ xử lí</option>
            <option value="1" selected>Hủy đơn</option>
            <option value="2">Đặt thành công</option>
            ';
        }
    }
?>
<div class="main_small">
                <div class="noi_dung">
                    <p>CẬP NHẬT THÔNG TIN ĐẶT BÀN</p>
                </div>
                <div class="form">
                    <form action="index.php?act=updatedatban" method="post" enctype="multipart/form-data">
                            <div class="mb_maloai">
                    
                            </div>
                            <div class="mb_tenloai">
                                Tên đang nhập: <br>
                                <input type="text" name="ten_dang_nhap" class="tenloai" value="<?=$ten_dang_nhap?>">
                            </div>
                            <div class="mb_tenloai">
                                ngày đặt: <br>
                                <input type="text" name="ngay_dat" class="tenloai"value="<?=$ngay_dat?>">
                            </div>
                            <div class="mb_tenloai">
                                Giờ đặt: <br>
                                <input type="text" name="gio_dat" class="tenloai"value="<?=$gio_dat?>">
                            </div>
                            <div class="mb_tenloai">
                                Kiểu bàn: <br>
                                <input type="text" name="kieu_ban" class="tenloai"value="<?=$kieu_ban?>">
                            </div>
                            <div class="mb_tenloai">
                                Số người: <br>
                                <input type="text" name="so_nguoi" class="tenloai"value="<?=$so_nguoi?>">
                            </div>
                            <div class="mb_tenloai">
                                Trạng thái: <br>
                                <!-- <input type="text" name="trang_thai" class="tenloai"value="<?php echo $trang_thai_don ?>"> -->
                                <select name="trang_thai" id="" class="select">
                                   <?php echo $trang_thai_don ?>
                                </select>
                            </div>
                            <div>
                                <input type="hidden" name="id" value="<?=$datban["id_dat_ban"]?>">
                                <input type="submit" name="capnhap" value="Cập nhật">
                                <input type="reset" value="Nhập lại">
                                <a href="index.php?act=listdb"><input type="button" value="Danh sách"></a>
                            </div>
                            <?php
                            if (isset($thongbao)&&($thongbao!=""))
                                echo $thongbao; 
                            ?>
                    </form>
                </div>
            </div>
        </main>
    </header>