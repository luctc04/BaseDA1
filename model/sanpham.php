<?php
    function insert_sanpham($name, $soluong, $price, $price_sale, $hinh,$xuatsu,$mota, $iddm){
        $sql= "INSERT INTO sanpham(name, soluong, price, price_sale,img,xuatsu,mota, iddm) VALUES ('$name','$soluong','$price','$price_sale','$hinh','$xuatsu','$mota','$iddm')";
        pdo_execute($sql); 
    }
    function delete_sanpham($id){
        $sql = "delete from sanpham where id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham_top10(){
        $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10"; 
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_home(){
        $sql = "select * from sanpham where 1 order by id desc limit 0,9"; 
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="", $iddm=0){
        $sql = "select * from sanpham where 1"; 
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function load_ten_dm($iddm){
        if($iddm>0){
            $sql = "select * from danhmuc where id=".$iddm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $tendm;
        }else{
            return "";
        }
    }
    function loadone_sanpham($id){
        $sql = "select * from sanpham where id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function load_sanpham_cungloai($id, $iddm){
        $sql = "select * from sanpham where iddm=".$iddm." AND id  <>".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham($id, $name, $soluong, $price, $price_sale, $hinh,$xuatsu,$mota, $iddm){
        if($hinh == ''){
            $sql= "update sanpham set name='$name' , soluong ='$soluong', price ='$price', price_sale ='$price_sale',mota = '$mota',xuatsu = '$xuatsu',iddm = '$iddm' where id = $id";
        }else{
            $sql= "update sanpham set name='$name' ,img='$hinh', soluong ='$soluong', price ='$price', price_sale ='$price_sale',mota = '$mota',xuatsu = '$xuatsu',iddm = '$iddm' where id = $id";
        }
        pdo_execute($sql);
    }
    

?>