<div class="main_small">
                <div class="noi_dung">
                    <p>DANH SÁCH DANH MỤC MÓN ĂN</p>
                </div>
                <div class="form_danh_sach">
                    <div class="row mb10 formdanhsachloaihang">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã bình luận</th>
                                <th>Nội dung bình luận</th>
                                <th>Mã hàng hóa</th>
                                <th>Tên tài khoản</th>
                                <th>Ngày bình luận</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listbinhluan as $binhluan){
                                    extract($binhluan);
                                    $xoabl="index.php?act=xoabl&id=".$id;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$noidung.'</td>
                                    <td>'.$idpro.'</td>
                                    <td>'.$iduser.'</td>
                                    <td>'.$ngaybinhluan.'</td>
                                    <td><a href="'.$xoabl.'"><input type="button" value="Xóa"  class="xoa"></a></td>
                                    </tr>';
                                } 
                            ?>
                        </table>
                    </div>
                    <div class="form_button">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                    </div>
                </div>
            </div>  
        </main>
    </header>