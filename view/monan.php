
<div class="thuc_don">
        <h1>THỰC ĐƠN</h1>
        <div class="menu_thuc_don">
            <?php
                foreach($dsdm as $dm){
                    extract($dm);
                    $linkdm = "index.php?act=monan&iddm=".$id;
                    echo'<div class="menu_thuc_don_big">
                            <a href="'.$linkdm.'"><span>'.$name.'</span></a>
                        </div>';
                } 
            ?>
            
            <!-- <div class="menu_thuc_don_big">
                <span>Món khai vị</span>
            </div>
            <div class="menu_thuc_don_big">
                <span>Món khai vị</span>
            </div>
            <div class="menu_thuc_don_big">
                <span>Món khai vị</span>
            </div>
            <div class="menu_thuc_don_big">
                <span>Món khai vị</span>
            </div> -->
        </div>
        <div class="tim_kiem">
                <form action="index.php?act=monan" method="post">
                    <input type="text" name="kyw" class="kyw">
                    <input type="submit" name="timkiem" value="Tìm kiếm" class="button">
                </form>
        </div>
        <?php
        echo '<div class="thuc_don_big">';
            foreach ($dsma as $ma){
                extract($ma);
                $linkmonan="index.php?act=monanct&idmonan=".$id;
                $hinh = $img_path.$img;
                echo'
                        <div class="thuc_don_small">
                            <img src="'.$hinh.'" alt="" width="450px" height="550px">
                            <div class="flex_gia">
                                <a href="'.$linkmonan.'"><span>'.$ten_mon.'</span></a>
                                <h3>'.formatNumber($price).'đ</h3>
                            </div>
                        </div>
                    ';
            } 
        echo '</div>';
        ?>
        <!-- <div class="thuc_don_big">
            <div class="thuc_don_small">
                <img src="/view/images/thucdon1.png" alt="" width="450px" height="550px">
                <h3>Thịt bò</h3>
            </div>
            <div class="thuc_don_small">
            <img src="/view/images/thucdon2.png" alt="">
                <h3>Thịt bò</h3>
            </div>
            <div class="thuc_don_small">
            <img src="/view/images/thucdon2.png" alt="">
                <h3>Thịt bò</h3>
            </div>
            <div class="thuc_don_small">
            <img src="/view/images/thucdon2.png" alt="">
                <h3>Thịt bò</h3>
            </div>
            <div class="thuc_don_small">
            <img src="/view/images/thucdon2.png" alt="">
                <h3>Thịt bò</h3>
            </div>
            <div class="thuc_don_small">
            <img src="/view/images/thucdon2.png" alt="">
                <h3>Thịt bò</h3>
            </div>
            <div class="thuc_don_small">
            <img src="/view/images/thucdon2.png" alt="">
                <h3>Thịt bò</h3>
            </div>
            
        </div> -->
    </div>