<div class="main_small">
                <div class="noi_dung">
                    <p>DANH SÁCH DANH MỤC MÓN ĂN</p>
                </div>
                <div class="form_danh_sach">
                    <div class="row mb10 formdanhsachloaihang">
                        <form action="index.php?act=listma" method="post">
                            <input type="text" name="kyw" class="select_input">
                            <select name="iddm" id="" class="selectdm">
                                <option value="0" select>Tất cả</option>
                                <?php
                                    foreach ($listdanhmuc as $danhmuc){
                                        extract($danhmuc);
                                        echo '<option value="'.$id.'">'.$name.'</option>';
                                    } 
                                ?>
                                
                            </select>
                            <input type="submit" value="GO" name="listok" class="select_go">
                        </form>
                        <?php
                        if (isset($thongbao)&&($thongbao!=""))
                            echo '<div class="thong_bao">'.$thongbao.'</div>'; 
                        ?>
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã món ăn</th>
                                <th>Tên món ăn</th>
                                <th>Giá</th>
                                <th>hinh</th>
                                <th>Mô tả</th>
                                <th></th>
                            </tr>
                            <div></div>
                            <?php
                                foreach($listmonan as $monan){
                                    extract($monan);
                                    $suama="index.php?act=suama&id=".$id;
                                    $xoama="index.php?act=xoama&id=".$id;
                                    $hinhpath="../upload/".$img;
                                    if (is_file($hinhpath)){
                                        $hinh="<img src='".$hinhpath."' height='80px'>" ;
                                    }else{
                                        $hinh= "no photo.";
                                    }
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$ten_mon.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$mo_ta.'</td>
                                    <td><a href="'.$suama.'"><input type="button" value="Sửa" class="sua"></a> <a href="'.$xoama.'"><input type="button" value="Xóa" class="xoa"></a></td>
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
                    <div class="form_button">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=addma"><input type="button" value="Nhập thêm"></a>
                    </div>
                </div>
            </div>
            
        </main>
    </header>