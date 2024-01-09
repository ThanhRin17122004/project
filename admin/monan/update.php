<?php
    if (is_array($monan)){
        extract($monan);
    }
    $hinhpath="../upload/".$img;
    if (is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80px'>" ;
    }else{
        $hinh= "no photo.";
    }
?>
<div class="main_small">
                <div class="noi_dung">
                    <p>CẬP NHẬT DANH MỤC MÓN ĂN</p>
                </div>
                <div class="form">
                    <form action="index.php?act=updatema" method="post" enctype="multipart/form-data">
                            <div class="mb_maloai">
                                <!-- Mã món ăn: <br>
                                <input type="text" name="mamonan" disabled class="maloai"> -->
                                Danh mục món ăn: <br>
                                <select name="iddm" id="" class="select">
                                <option value="0" select>Tất cả</option>
                                <?php
                                    foreach ($listdanhmuc as $danhmuc){
                                        extract($danhmuc);
                                        if ($iddm==$id)
                                            echo '<option value="'.$id.'" selected>'.$name.'</option>';
                                        else 
                                            echo '<option value="'.$id.'">'.$name.'</option>';
                                    } 
                                ?>
                                
                            </select>
                            </div>
                            <div class="mb_tenloai">
                                Tên món ăn: <br>
                                <input type="text" name="tenmonan" class="tenloai" value="<?=$ten_mon?>">
                            </div>
                            <div class="mb_tenloai">
                                Giá: <br>
                                <input type="text" name="gia" class="tenloai"value="<?=$price?>">
                            </div>
                            <div class="mb_tenloai">
                                Hình: <br>
                                <input type="file" name="hinh" class="tenloai">
                                <?=$hinh?>
                            </div>
                            <div class="mb_tenloai">
                                MÔ tả: <br>
                                <textarea name="mota" id="" cols="30" rows="10"><?=$mo_ta?></textarea>
                            </div>
                            <div>
                                <input type="hidden" name="id" value="<?=$monan["id"]?>">
                                <input type="submit" name="capnhap" value="Cập nhật">
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