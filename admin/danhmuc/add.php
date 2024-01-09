<div class="main_small">
                <div class="noi_dung">
                    <p>THÊM DANH MỤC MÓN ĂN</p>
                </div>
                <div class="form">
                    <form action="index.php?act=adddm" method="post">
                        <div class="mb_maloai">
                            Mã loại: <br>
                            <input type="text" name="maloai" disabled class="maloai">
                        </div>
                        <div class="mb_tenloai">
                            Tên loại món ăn: <br>
                            <input type="text" name="tenloai" class="tenloai">
                            <?php
                                // Hiển thị lỗi nếu có
                                if (!empty($tenloai_news)) {
                                    foreach ($tenloai_news as $tenloai_new) {
                                        echo '<span class="color"> '.$tenloai_new.' </span><br>';
                                    }
                                }
                            ?>
                        </div>
                        <div>
                            <input type="submit" name="themmoi" value="Thêm mới">
                            <input type="reset" value="Nhập lại">
                            <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                        </div>
                        <!-- <?php
                        if (isset($thongbao)&&($thongbao!=""))
                            echo $thongbao; 
                        ?> -->
                    </form>
                </div>
            </div>
            
        </main>
    </header>