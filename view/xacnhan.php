<?php 
    // session_start();
    if (isset($_POST['xacnhan'])&&($_POST['xacnhan'])){
        $ten_dang_nhap = $_POST ['name'];
        $email = $_POST ['email'];
        $ngay_dat = $_POST ['date'];
        $so_nguoi = $_POST['number'];
        $gio = $_POST ['gio'];
        $kieu_ban = $_POST['kieu_ban'];
        $_SESSION['data'] = $_POST;
    }
?>
<div class="xac_nhan">
    <h1 style="font-family: 'Fasthand', cursive;
                                font-family: 'Unna', serif;
                                font-family: 'Whisper', cursive;
                                font-size:60px">
        Xác nhận đơn hàng
    </h1>
    <div class="box">
        <div class="noi_dung_xac_nhan">
            <div class="span">
                <label for="">Tên:</label>
                <span><?=$ten_dang_nhap?></span><br>
            </div>
            <div class="span">
                <label for="">Email:</label>
                <span><?=$email?></span><br>
            </div>
            <div class="span">
                <label for="">Ngày đặt:</label>
                <span><?=$ngay_dat?></span><br>
            </div>
            <div class="span">
                <label for="">Số người:</label>
                <span><?=$so_nguoi?></span><br>
            </div>
            <div class="span">
                <label for="">Giờ:</label>
                <span><?=$gio?></span><br>
            </div>
            <div class="span">
                <label for="">Kiểu bàn:</label>
                <span><?=$kieu_ban?></span>
            </div>
            <div class="span">
                <label for="">Giá tiền cọc bàn:</label>
                <span>2.000.000đ</span>
            </div>
            <form action="/view/inset_datban.php" method="post">
                <input type="submit" value="xác nhận" class="submit">
            </form>
        </div>
        <div class="khoang_cach">

        </div>
        <div class="img">
            <img src="/view/images/dau_bep_-_su_lua_chon_tuyet_voi_2.jpg" alt="" width="200px" height="250px">
        </div>
    </div>
</div>
<style>
    .img{
        padding-top: 20px;
    }
    .submit{
        padding: 7px 20px;
        margin-bottom: 15px;
        border-radius: 10px;
        border: 1px solid #B5A963;
        background-color: #B5A963;
        font-weight: bold;
        font-size: 17px;
    }
    .box{
        display: flex;
        width: 60%;
        border: 1px solid black;
        justify-content: space-between;
        margin: 0 auto;
        padding-left: 100px;
        padding-right: 100px;
        font-size: 17px;
        margin-top: 40px;
    }
    .xac_nhan h1{
        margin-top: 20px;
        color: black;
        text-align: center;
    }
    .span{
        margin-bottom: 20px;
    }
    .noi_dung_xac_nhan{
        padding-top: 20px;
    }
    label{
        font-weight: bold;
    }
    .xac_nhan{
        margin-bottom: 60px;
    }
</style>