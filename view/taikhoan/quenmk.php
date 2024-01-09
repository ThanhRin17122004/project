<div class="dang_ki">
        <div class="tieu_de">QUÊN MẬT KHẨU</div>
        <div class="form_dang_ki">
            <form action="index.php?act=quenmk" method="post" class="">
                Email:<br>
                <input type="email" name="email"><br>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" value="gửi" name="gui_email">
                <input type="reset" value="Nhập lại">
            </form>
            <?php
                if (isset($thongbao)&&($thongbao!="")){
                    echo $thongbao; 
                } 
            ?>
        </div>
    </div>