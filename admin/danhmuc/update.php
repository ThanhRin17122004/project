<?php
    if (is_array($dm)){
        extract($dm);
    }
?>
<div class="main_small">
                <div class="noi_dung">
                    <p>CẬP NHẬT DANH MỤC MÓN ĂN</p>
                </div>
                <div class="form">
                    <form action="index.php?act=updatedm" method="post">
                        <div class="mb_maloai">
                            Mã loại: <br>
                            <input type="text" name="maloai" disabled class="maloai">
                        </div>
                        <div class="mb_tenloai">
                            Tên loại món ăn: <br>
                            <input type="text" name="tenloai" class="tenloai" value="<?php if(isset($name)&($name!="")) echo $name;?>">
                        </div>
                        <div>
                            <input type="hidden" name="id" value="<?php if(isset($id)&($id>0)) echo $id;?>">
                            <input type="submit" name="capnhat" value="Cập nhật">
                            <input type="reset" value="Nhập lại">
                            <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
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