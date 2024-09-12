<?php
    function loadAll_thongke(){
        $sql = "SELECT danhmuc.idDm as iddm, danhmuc.name as tendm, count(sanpham.idDm) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice FROM sanpham left join danhmuc on danhmuc.idDm=sanpham.idDm where 1"; 
        $sql.=" group by danhmuc.idDm order by danhmuc.idDm desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }

?>