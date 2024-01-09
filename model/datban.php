<?php
    function insertDatBan($id_tai_khoan,$ten_dang_nhap, $ngay_dat, $gio_dat,$kieu_ban,$so_nguoi,$trang_thai=0)
    {
        $sql = "INSERT INTO datban ( id_tai_khoan,ten_dang_nhap, ngay_dat,so_nguoi,gio_dat,kieu_ban) values('$id_tai_khoan','$ten_dang_nhap','$ngay_dat','$so_nguoi','$gio_dat','$kieu_ban')";
       return pdo_execute($sql);
    }
    function inserthoadon($id_tai_khoan,$id_dat_ban, $ngay_dat)
    {
        $sql = "INSERT INTO hoa_don ( id_tai_khoan,id_dat_ban, thoi_gian_thanh_toan) values('$id_tai_khoan','$id_dat_ban','$ngay_dat')";
        return  pdo_execute($sql);
    }
    function loadall_datban(){
        $sql = "SELECT * FROM datban INNER JOIN taikhoan on datban.id_tai_khoan = taikhoan.id order by id_dat_ban desc";
        $listdatban=pdo_query($sql);
        return $listdatban;
    }
    function load_danhsachdatban($id_tai_khoan){
        $id_tai_khoan = (int)($id_tai_khoan);
        $sql = "SELECT * FROM datban INNER JOIN taikhoan on datban.id_tai_khoan = taikhoan.id where id_tai_khoan= ?  order by id_dat_ban desc ";
        $listdatban=pdo_query($sql,$id_tai_khoan);
        return $listdatban;
    }
    function delete_datban($id_dat_ban){
        $sql = "DELETE FROM datban where id_dat_ban=".$id_dat_ban;
        pdo_execute($sql);
    }
    function loadone_datban($id_dat_ban){
        $sql= "SELECT * FROM datban where id_dat_ban=".$id_dat_ban;
        $datban = pdo_query_one($sql);
        return $datban;
    }
    function update_datban($id_dat_ban,$ten_dang_nhap,$ngay_dat,$gio_dat,$so_nguoi,$trang_thai_don){
            $sql = "UPDATE datban set ten_dang_nhap ='".$ten_dang_nhap."',ngay_dat ='".$ngay_dat."',gio_dat ='".$gio_dat."',so_nguoi ='".$so_nguoi."',trang_thai ='".$trang_thai_don."' where id_dat_ban=".$id_dat_ban;
        pdo_execute($sql);
    }
?>