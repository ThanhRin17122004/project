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
<div class="bang_gia">
            <img src="./view/images/bang-gia.png" alt="">
        </div>
    </header>
    <main class="content">
        <div class="content_1">
            <div class="sun_house">
                <div>
                    <h2 style ="font-family: 'Fasthand', cursive;
                    font-family: 'Unna', serif; font-size: 200%;">
                        Sun House BBQ
                    </h2>
                </div>
                <div class="noidung">
                    <span><b>Sun Homes BBQ</b> (Quán thịt nướng Hàn Quốc) sẽ đưa bạn đến Seoul, nơi những con phố bình dị, 
                        những quán ăn dân dã đã trở nên quen thuộc và gắn bó với người dân xứ Hàn. Nếu đã một lần thưởng thức thịt nướng tại <b>Sun Homes BBQ</b>, 
                        bạn sẽ không thể quên được hương vị “ngất ngây” của những món sườn non bò Mỹ, nạc vai bò Mỹ, dẻ sườn tươi…. 
                        khi hòa quyện vào với các loại gia vị đặc trưng của xứ sở Kimchi đã trở nên hấp dẫn đến thế nào.
                    </span>
                </div>
                <br>
                <div class="noidung">
                    <span>
                        Bí quyết của <b>Sun Homes BBQ</b> nằm ở nước sốt tẩm ướp thịt được chế biến từ nguyên liệu hoàn toàn tự nhiên, 
                        theo công thức bí truyền, 
                        do Bếp Trưởng <b>Park Sung Min</b> hơn 40 năm kinh nghiệm nghiên cứu và chế biến. 
                       <b> Sun Homes BBQ</b> có 2 dạng thực đơn để Quý Khách lựa chọn là: <b>Chọn Combo</b> và <b>Gọi Món</b>.
                    </span>
                </div>
            </div>
            <div class="img_sun_house">
                <img src="./view/images/sun_home_2.png" alt="" width="252px" height="400px">
            </div>
            <div class="img_sun_house1">
                <img src="./view/images/sun_home_1.png" alt="" width="252px" height="400px">
            </div>
        </div>
        <div class="content_2">
            <div class="content_img">
                <div class="content_img_big">
                    <div class="content_img_1">
                        <img src="./view/images/content1.jpg" alt="" width="300px" height="200px">
                    </div>
                    <div class="content_img_1">
                        <img src="./view/images/content2.jpg" alt="" width="300px" height="200px">
                    </div>
                </div>
                <div class="content_img_big">
                    <div class="content_img_1">
                        <img src="./view/images/content3.jpg" alt="" width="300px" height="200px">
                    </div>
                    <div class="content_img_1">
                        <img src="./view/images/content4.jpg" alt="" width="300px" height="200px">
                    </div>
                </div>
            </div>
            <div class="content_noidung">
                <div>
                    <h3 style ="font-family: 'Fasthand', cursive;
                    font-family: 'Unna', serif; font-size: 200%;">Menu</h3>
                </div>
                <div class="span">
                    <span>Hơn 200 món ăn được chắt lọc từ Tinh hoa ẩm thực Hàn Quốc với mức giá chỉ từ 69.000 cùng nhiều combo và set bộ hấp dẫn đều có trong menu của King BBQ. 
                        Ngoài ra các bạn còn được thưởng thức những món ăn đặc trưng 
                        và nổi tiếng trong văn hoá ẩm thực của Hàn Quốc do chính tay đàu bếp người Hàn Quốc chế biến.
                    </span>
                </div>
                <div>
                    <button><i class="fa-solid fa-book"></i>Thực đơn</button>
                </div>
            </div>
        </div>
        <div class="content_3">
            <div class="sun_house_3">
                <div>
                    <h2 style ="font-family: 'Fasthand', cursive;
                    font-family: 'Unna', serif; font-size: 200%;">
                        Restaurant
                    </h2>
                </div>
                <div class="noidung">
                    <span>Khi nói đến Hàn Quốc, ẩm thực là nét văn hóa đặc trưng không thể bỏ qua và thịt nướng Hàn Quốc luôn được
                         “truyền tai” về độ tươi ngon, đậm đà qua những trang cẩm nang du lịch hay những bộ phim Hàn gây bão
                    </span>
                </div>
                <br>
                <div class="noidung">
                    <span>
                        Hệ thống <b>Sun Homes BBQ</b> hiện có 17 nhà hàng trong đó 7 nhà hàng chuyên về Buffet
                         tự chọn (Buffet) và 10 nhà hàng chuyên về gọi món (Alacarte).
                    </span>
                </div>
                <div class="noidung">
                    <span>
                        Hãy lựa chọn địa điểm gần bạn nhất và liên hệ đặt bàn ngay nhé!
                    </span>
                </div>
            </div>
            <div class="img_sun_house">
                <img src="./view/images/content5.jpg" alt="" width="252px" height="400px">
            </div>
            <div class="img_sun_house1">
                <img src="./view/images/content6.jpg" alt="" width="252px" height="400px">
            </div>
        </div>
        <div class="content_4">
            <div class="content_4_big">
                <div class="content_4_noi_dung">
                    <p>Để đăng kí nhận ưu đãi hằng tháng tới <b>30%</b> từ <b>Sun House BBQ</b></p>
                </div>
                <div class="content_4_button">
                    <button>ĐĂNG KÍ NGAY</button>
                </div>
            </div>
        </div>
        <div class="content_5">
            <div class="img_sun_house">
                <img src="./view/images/img_content_5.jpg" alt="" width="560px" height="350px">
            </div>
            <div class="sun_house_5">
                <div>
                    <h2 style ="font-family: 'Fasthand', cursive;
                    font-family: 'Unna', serif; font-size: 200%;">
                        Korea Cousine
                    </h2>
                </div>
                <div class="noidung">
                    <span>Khi nói đến Hàn Quốc, ẩm thực là nét văn hóa đặc trưng không thể bỏ qua và thịt nướng Hàn Quốc luôn được 
                        “truyền tai” về độ tươi ngon, đậm đà qua những trang cẩm nang du lịch hay những bộ phim Hàn gây bão.
                    </span>
                </div>
                <br>
                <div class="noidung">
                    <span>
                        Sốt chấm Ssamjang cay nồng thường được dùng để ăn kèm với các loại thịt nướng. Đó là hỗn hợp được
                         trộn giữa tương đậu và tương ớt lên men..mỗi khi thịt chín ruộm, người ta phết một chút sốt lên bề mặt miếng thịt, cuộn cùng
                          với kim chi, xà lách xoăn, dưa chuột. Cho tất cả vào miệng và nhai kỹ bạn sẽ cảm nhận được ngay hương vị đặc biệt của loại tương này.
                    </span>
                </div>
            </div>
        </div>
        <div class="content_6">
            <div class="img_small">
                <img src="./view/images/a1.jpg" alt="" >
            </div>
            <div class="img_small">
                <img src="./view/images/a2.jpg" alt="">
            </div>
            <div class="img_small">
                <img src="./view/images/a3.jpg" alt="">
            </div>
            <div class="img_small">
                <img src="./view/images/a4.jpg" alt="">
            </div>
        </div>
    </main>