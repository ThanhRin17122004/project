    <div class="mon_an_ct">
        <?php
            extract($onemonan);
        ?>
        <div class="tieu_de_mon_an_ct">
            <span>CHI TIẾT MÓN ĂN</span>
        </div>
        <?php
            $img=$img_path.$img; 
            echo '<div class="noi_dung_mon_an_ct">';
            echo '<div class="img_ct">';
                echo '<img src="'.$img.'">';
            echo '</div>';
            echo '<div class="noi_dung_ct">';
            echo '<div class="ma_ct">';
                echo '<b>MMA:</b>' .$id;
            echo '</div>';
            echo '<div class="ten_mon_an">';
                echo '<b>Tên món ăn:</b>' .$ten_mon;
            echo '</div>';
            echo '<div class="gia_mon_an">';
                echo '<b>Giá:</b>' .formatNumber($price); echo 'đ';
            echo '</div>';
            echo '<div class="mota_mon_an">';
                echo '<b>Mô tả:</b></br>' ;
                echo '' .$mo_ta;
            echo '</div>';
            echo '</div>';
        echo '</div>';
        ?>



        <!-- <div class="noi_dung_mon_an_ct">
            <div class="img_ct">
                <img src="/view/images/bạch tuộc chiên giòn.jpg">
            </div>
            <div class="noi_dung_ct">
                <div class="ma_ct">
                    <b>MMA:</b>
                </div>
                <div class="ten_mon_an">
                    <b>Tên món ăn:</b>
                </div>
                <div class="gia_mon_an">
                    <b>Giá:</b>
                </div>
                <div class="mota_mon_an">
                    <b>Mô tả:</b></br>
                </div>
            </div>
        </div> -->



    </div>
    <!-- <div class="binh_luan_mon_an">
        <div class="tieu_de_bl">
            Bình luận
        </div>
        <div class="noi_dung_bl">
            <input type="text">
        </div>
    </div> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                    }); 
                </script>
                <div class="row" id="binhluan">

                </div>