<div class="main_small">
                <div class="noi_dung">
                    <p>DANH SÁCH DANH MỤC MÓN ĂN</p>
                </div>
                <div class="form_danh_sach">
                    <div class="row mb10 formdanhsachloaihang">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã loại</th>
                                <th>Tên loại</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    $suadm="index.php?act=suadm&id=".$id;
                                    $xoadm="index.php?act=xoadm&id=".$id;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td><a href="'.$suadm.'"><input type="button" value="Sửa" class="sua"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa" class="xoa"></a></td>
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
                        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                    </div>
                    
                </div>
            </div>
            
        </main>
    </header>