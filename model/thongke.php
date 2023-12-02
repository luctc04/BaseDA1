<?php
    function loadall_thongke(){
        $sql = "select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price_sale) as mingia, max(sanpham.price_sale) as maxgia, avg(sanpham.price_sale) as avggia";
        $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
        $sql.=" group by danhmuc.id  order by danhmuc.id desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }


?>