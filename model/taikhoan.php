<?php
    function  insert_taikhoan($ten_dang_nhap,$pass,$ho_va_ten,$email,$hinh){
        $sql = "INSERT INTO taikhoan(ten_dang_nhap,pass,ho_va_ten,email,hinh) values ('$ten_dang_nhap','$pass','$ho_va_ten','$email','$hinh')" ;
        pdo_execute($sql);
    }
    function checkuser($ten_dang_nhap){
        $sql= "SELECT * FROM  taikhoan WHERE ten_dang_nhap='".$ten_dang_nhap."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($ten_dang_nhap,$ho_va_ten,$email,$hinh,$id){
            $sql = "UPDATE taikhoan set ten_dang_nhap ='".$ten_dang_nhap."',ho_va_ten ='".$ho_va_ten."',email ='".$email."',hinh ='".$hinh."' where id=".$id;
    
            pdo_execute($sql);
    }
    function checkemail($email){
        $sql= "SELECT * FROM  taikhoan WHERE email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function loadall_taikhoan(){
        $sql= "SELECT * FROM  taikhoan order by id desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function delete_taikhoan($id){
        $sql= "DELETE  FROM taikhoan WHERE id=".$id;
        pdo_execute($sql);
    }
?>