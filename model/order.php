<?php

function addOrder($id_user, $hoten, $sdt, $email, $diachi, $tongtien, $pttt){
    $sql = "INSERT INTO tbl_order (id_user, hoten, sdt, email, diachi, tongtien, pttt) VALUES ($id_user, '$hoten', '$sdt', '$email', '$diachi', $tongtien, $pttt);";
    $id = pdo_executeid($sql);
    return $id;
}

function addOrderDetail($id_order, $id_pro, $giamua, $soluong, $thanhtien){
    $sql = "INSERT INTO order_detail (id_order, id_pro, giamua, soluong, thanhtien) VALUES ($id_order, $id_pro, $giamua, $soluong, $thanhtien );";
    pdo_execute($sql);
}

//admin
function loadall_donhangadmin(){
    $sql = "SELECT * FROM tbl_order where 1";
    $donhang = pdo_query($sql);
    return $donhang;
}

function loadone_donhang($id_order){
    $sql = "select * from tbl_order where id_order=" . $id_order;
    $dh = pdo_query_one($sql);
    return $dh;
}

function update_trangthai($id_order, $trangthai){
    $sql = "update tbl_order set trangthai='" . $trangthai . "' where id_order=" . $id_order;
    pdo_execute($sql);
}

//client
function loadall_donhang($id_user){
    $sql = "SELECT id_order, hoten, sdt, diachi, tongtien, pttt, ngaydathang, trangthai FROM tbl_order where id_user=" . $id_user;
    $donhang = pdo_query($sql);
    return $donhang;
}

function loadone_donhangchitiet($id_order){
    $sql = "SELECT sanpham.name ,img, order_detail.soluong,thanhtien FROM `order_detail`
            join sanpham on sanpham.id=id_pro
            WHERE id_order=$id_order";
    $donhangct = pdo_query($sql);
    return $donhangct;
}


?>