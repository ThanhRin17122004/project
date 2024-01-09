<style>
    .form_danh_sach{
    padding: 20px 20px;
}
.formdanhsachloaihang table{
    width: 100%;
    font-size: 18px;
    border-collapse:collapse ;
    border: 1px #DDECD5 solid ;
    text-align: center;
}
.formdanhsachloaihang table .sua,.xoa{
    border-radius: 5px;
    padding: 10px 20px;
    background-color: white;
    border: 1px #ccc solid;
}
.formdanhsachloaihang table .sua:hover,.xoa:hover{
    background-color: #EED85D;
    color: #0A0000;
}
.formdanhsachloaihang table th{
    /* width: 10%; */
    background-color: #DDECD5;
    padding: 10px 20px;
    color: #0A0000;
    border: 1px #DDECD5 solid ;
}
.formdanhsachloaihang table td{
    padding: 10px 20px;
    border-bottom: 1px #ccc solid ;
    border-right: 1px #ccc solid ;
    border-left: 1px #ccc solid ;
}
.form_button{
    margin-top: 20px;
}
.form_button input[type="submit"],
.form_button input[type="reset"],
.form_button input[type="button"]{
    border-radius: 5px;
    padding: 10px 20px;
    background-color: white;
    border: 1px #ccc solid;
}
.form_button input[type="submit"]:hover,
.form_button input[type="reset"]:hover,
.form_button input[type="button"]:hover{
    background-color: #EED85D;
}
.h3{
    text-align: center;
    margin-top: 15px;
    font-size: 25px;
    color: #EED85D;
}
</style>
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
<div>
    <div class="h3"><h3>LỊCH SỦ ĐẶT</h3></div>
    <div class="main_small">
        <div class="form_danh_sach">
            <div class="row mb10 formdanhsachloaihang">
                <table>
                    <tr>
                        <th>Tên</th>
                        <th>Enail</th>
                        <th>Ngày đặt</th>
                        <th>Số người</th>
                        <th>Giờ đặt</th>
                        <th>Kiểu bàn</th>
                        <th>Trạng thái đơn</th>
                    </tr>
                    <?php
                        if (isset($_SESSION['ten_dang_nhap'])){
                            $id_tai_khoan = $_SESSION['ten_dang_nhap']['id'];
                            $rows=load_danhsachdatban(trim($id_tai_khoan));
                            if (is_array($rows)){
                                foreach ($rows as $row){
                                    extract($row);
                                    if ($trang_thai==0){
                                        $trang_thai_don = '<b class="blue">Đang chờ xử lí</b>';
                                    }else if ($trang_thai==1){
                                        $trang_thai_don = '<b class="red"> Đã hủy</b>';
                                    }else {
                                        $trang_thai_don = '<b class="green">Đặt bàn thành công</b>';
                                    }
                                    echo '<tr>
                                    <td> '.$ten_dang_nhap.'</td>
                                    <td> '.$email.'</td>
                                    <td> '.$ngay_dat.'</td>
                                    <td> '.$so_nguoi.'</td>
                                    <td>'.$gio_dat.'</td>
                                    <td> '.$kieu_ban.'</td>
                                    <td> '.$trang_thai_don.'</td>
                                    </tr>';
                                }
                            }
                            
                        } 
                    ?>
                </table>
            </div>                 
        </div>
    </div>
</div>
                
</main>
</header>