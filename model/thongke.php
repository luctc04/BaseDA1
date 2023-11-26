<?php
    function loadall_thongke(){
        $sql = "select danhmuc.id as madm, danhmuc.tendm as tendm, count(sanpham.id) as countsp, min(sanpham.gia) as mingia, max(sanpham.gia) as maxgia, avg(sanpham.gia) as avggia";
        $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
        $sql.=" group by danhmuc.id  order by danhmuc.id desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }


?>