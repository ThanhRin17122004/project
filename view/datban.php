<div class="side">
            <div class="slideshow-container">

                <div class="mySlides fade">
                <img src="/view/images/slide1.jpg" height="616px" width="100%">
                </div>

                <div class="mySlides fade">
                <img src="/view/images/slide2.jpg" height="616px" width="100%">
                </div>

                <div class="mySlides fade">
                <img src="/view/images/content4.jpg" height="616px" width="100%">
                </div>

            </div>
            <br>
                <div style="text-align:center ;
                            margin-top: -40px;">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                </div>

            <script>
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
                }
            </script>
        </div>
    <div class="dat_ban">
        <form action="index.php?act=xacnhan" method="post">
            <div class="dat_ban_big">
                <div class="dat_ban_left">
                    <h2 style="font-family: 'Fasthand', cursive;
                                font-family: 'Unna', serif;
                                font-family: 'Whisper', cursive;
                                font-size:60px">
                        Set Table
                    </h2>
                    <span>Quý khách vui lòng đặt bàn trước để có trải nghiệm thưởng thức ẩm thực tốt nhất tại<br> Sun Homes BBQ.</span>
                    <h3>Gợi ý đặt bàn:</h3>
                    <div class="goi_y_db">
                        Đi 1 người: Đặt bàn đơn
                        <div class="gach"></div>
                        Đi 2 người: Đặt bàn đôi
                        <div class="gach"></div>
                        Đi nhóm 4-6 người: Đặt bàn 6 người
                        <div class="gach"></div>
                        Đi nhóm 6-12 người: Đặt bàn dài
                        <div class="gach"></div>
                        Đi nhóm >12 người: Gọi trực tiếp Hotline: 0983967434
                        <div class="gach"></div>
                    </div>
                </div>
                <div class="khoang">

                </div>
                <div class="dat_ban_right">
                    <div class="input_right">
                        <input type="text"  placeholder="Tên người đặt..." class="input" name="name" value="<?php echo isset($_SESSION['ten_dang_nhap']['ten_dang_nhap']) ?$_SESSION['ten_dang_nhap']['ten_dang_nhap']:'' ?>"><br>
                        <input type="text"  placeholder="Email người đặt..."class="input" name="email" value="<?php echo isset($_SESSION['ten_dang_nhap']['email']) ?$_SESSION['ten_dang_nhap']['email']:'' ?>"><br>
                        <input type="number"  placeholder="Số người ăn..."class="input" name="number"><br>
                        <input type="date" class="input" name="date" value="<?php echo date('Y-m-d')?>">
                    </div>
                    <div class="gio_right">
                        <select name="gio" id="" class="gio">
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                        </select>
                        <select name="kieu_ban" id="" class="kieu_ban">
                            <option value="Bàn đơn">Bàn đơn</option>
                            <option value="Bàn đôi">Bàn đôi</option>
                            <option value="Bàn 6 người">Bàn 6 người</option>
                            <option value="Bàn dài dưới 12 người">Bàn dài dưới 12 người</option>
                        </select>
                    </div>
                    <input type="submit" value="Đặt bàn" name="xacnhan" class="button_datban">
                </div>
            </div>
            </form>
    </div>
    <style>
        .button_datban{
            padding: 10px 30px;
            background-color: #B5A963;
            border-radius: 10px;
            border: 1px solid #B5A963;
            font-weight: bold;
        }
        .kieu_ban{
            padding: 5px 10px;
            border-radius: 20px;
            border: 2px solid #EED85D;
        }
        .gio{
            padding: 5px 10px;
            border-radius: 20px;
            width: 100px;
            border: 2px solid #EED85D;
        }
        #toast {
        position: fixed;
        top: 6%;
        right: 20px;
        transform: translateX(-50%);
        padding: 15px;
        background-color: green;
        color: #fff;
        border-radius: 5px;
        opacity: 1;
        animation: fadeOut 4s ease-in-out forwards;
        z-index: 999;
        display: none;
        }

        #toast.active {
        display: block;
        }

        @keyframes fadeOut {
        from {
            opacity: 1;
        }
        to {
            opacity: 0;
        }
        }
    </style>
    <div id="toast">Đặt Bàn Thanh Công</div>
    <script>
         function showToast() {
            const toast = document.getElementById('toast');
            toast.classList.add('active');
        }
        <?php
        if (isset($_SESSION['orderSuccessMessage'])) {
            $orderSuccessMessage = $_SESSION['orderSuccessMessage'];
            // Hiển thị thông báo thành công, ví dụ, sử dụng JavaScript để hiển thị toast
            echo "showToast()";
            // Xóa thông báo từ session để tránh hiển thị nhiều lần
            unset($_SESSION['orderSuccessMessage']);
        }
        ?>
    </script>
