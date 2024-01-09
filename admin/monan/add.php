<div class="main_small">
                <div class="noi_dung">
                    <p>THÊM MỚI MÓN ĂN</p>
                </div>
                <div class="form">
                    <form action="index.php?act=addma" method="post" enctype="multipart/form-data">
                    <div class="mb_tenloai">
                            Danh mục: <br>
                            <select name="iddm" id=""class="select">
                                <?php
                                    foreach ($listdanhmuc as $danhmuc){
                                        extract($danhmuc);
                                        echo '<option value="'.$id.'">'.$name.'</option>';
                                    } 
                                ?>
                                
                            </select>
                        </div>
                        <div class="mb_maloai">
                            Mã món ăn: <br>
                            <input type="text" name="mamonan" disabled class="maloai">
                        </div>
                        <div class="mb_tenloai">
                            Tên món ăn: <br>
                            <input type="text" name="tenmonan" class="tenloai">
                        </div>
                        <div class="mb_tenloai">
                            Giá: <br>
                            <input type="text" name="gia" class="tenloai">
                        </div>
                        <div class="mb_tenloai">
                            Hình: <br>
                            <input type="file" name="hinh" class="tenloai">
                        </div>
                        <div class="mb_tenloai">
                            Mô tả: <br>
                            <textarea name="mota" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="button">
                            <input type="submit" name="themmoi" value="Thêm mới">
                            <input type="reset" value="Nhập lại">
                            <a href="index.php?act=listma"><input type="button" value="Danh sách"></a>
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