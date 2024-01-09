<?php
        function insert_monan($tenmonan,$gia,$hinh,$mota,$iddm){
            $sql = "INSERT INTO mon_an(ten_mon,price,img,mo_ta,iddm) values('$tenmonan','$gia','$hinh','$mota','$iddm')";
            pdo_execute($sql);
        }
        function delete_monan($id){
            $sql = "DELETE FROM mon_an where id=".$id;
            pdo_execute($sql);
        }
        function loadall_monan_home(){
            $sql = "SELECT * FROM mon_an where 1 order by id desc limit 0,15";
            $listmonan=pdo_query($sql);
            return $listmonan;
        }
        function loadall_monan($kyw="", $iddm=0){
            $sql = "select * from mon_an where 1 ";
            if ($kyw!=""){
                $sql.=" and ten_mon like '%".$kyw."%' ";
            }
            if ($iddm>0){
                $sql.=" and iddm = '".$iddm."' ";
            }
            $sql.=" order by id desc";
            $listmonan=pdo_query($sql);
            return $listmonan;
        }
        function loadone_monan($id){
            $sql= "SELECT * FROM mon_an where id=".$id;
            $monan = pdo_query_one($sql);
            return $monan;
        }
        function update_monan($id,$iddm,$tenmonan,$gia,$hinh,$mota){
            // if ($hinh!= "")
            //     $sql = "UPDATE mon_an set iddm='".$iddm."', ten_mon='".$tenmonan."',price='".$gia."',img='".$hinh."',mo_ta='".$mota."' where id=".$id;
            // else
            //     $sql = "UPDATE mon_an set iddm='".$iddm."',ten_mon='".$tenmonan."',price='".$gia."',mo_ta='".$mota."' where id=".$id;
            if ($hinh!="")
                $sql = "UPDATE mon_an set iddm ='".$iddm."',ten_mon ='".$tenmonan."',price ='".$gia."',hinh ='".$hinh."',mo_ta ='".$mota."' where id=".$id;
            else
                $sql = "UPDATE mon_an set iddm ='".$iddm."',ten_mon ='".$tenmonan."',price ='".$gia."',mo_ta ='".$mota."' where id=".$id;
            
            pdo_execute($sql);
        }
        function formatNumber($number)
{
    $formatted_number = number_format($number, 0, ',', '.');
    return $formatted_number;
}
?>