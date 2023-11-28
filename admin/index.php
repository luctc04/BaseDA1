<?php  
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "header.php";
    


    /* controller danh mục */
    if(isset($_GET['act'])){
        $act= $_GET['act'];
        switch ($act) {
            case 'adddm':
                // kiểm tra xem ng dùng có click vào add hay 0
                if(isset($_POST['btn-submit'])&&($_POST['btn-submit'])){
                    $tenloai= $_POST['tenloai']; 
                    insert_danhmuc($tenloai);
                    $thongbao= "thêm thành công";
                }
                include "danhmuc/add.php";
                break;
                
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break; 
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break; 
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm = loadone_danhmuc($_GET['id']);
                }            
                include "danhmuc/update.php";
                break; 
            case 'updatedm':
                if(isset($_POST['btn-submit'])&&($_POST['btn-submit'])){
                    $tenloai= $_POST['tenloai'];
                    $id= $_POST['id'];
                    update_danhmuc($id, $tenloai);
                    $thongbao= "Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break; 

            /* controller sản phẩm */  
            case 'addsp':
                // kiểm tra xem ng dùng có click vào add hay 0
                if(isset($_POST['btn-submit'])&&($_POST['btn-submit'])){
                    $iddm= $_POST['iddm']; 
                    $name= $_POST['name']; 
                    $soluong= $_POST['soluong']; 
                    $price= $_POST['price']; 
                    $price_sale= $_POST['price_sale']; 
                    $xuatsu= $_POST['xuatsu']; 
                    $mota= $_POST['mota']; 

                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                    }
                    insert_sanpham($name, $soluong, $price, $price_sale, $hinh,$xuatsu,$mota, $iddm);
                    $thongbao= "thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw= $_POST['kyw'];
                    $iddm= $_POST['iddm'];
                }else{
                    $kyw= '';
                    $iddm= 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw, $iddm);
                include "sanpham/list.php";
                break; 
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham= loadall_sanpham();
                include "sanpham/list.php";
                break; 
            case "suasp":
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sanpham =loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
             case "updatesp":
                if(isset($_POST['btn-submit'])&&($_POST['btn-submit'])){
                    $iddm= $_POST['iddm']; 
                    $name= $_POST['name']; 
                    $soluong= $_POST['soluong']; 
                    $price= $_POST['price']; 
                    $price_sale= $_POST['price_sale']; 
                    $xuatsu= $_POST['xuatsu']; 
                    $mota= $_POST['mota']; 
                    $id= $_POST['id'];

                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                    }
                    update_sanpham($id, $name, $soluong, $price, $price_sale, $hinh,$xuatsu,$mota, $iddm);
                    $thongbao= "thêm thành công";
                }
                //hiện thị lại list sp và dm 
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham('',0);
                include "sanpham/list.php";
                break;   


            /* controller tài khoản */    
            case 'dskh':
                $listtaikhoan= loadall_taikhoan();
                include "taikhoan/list.php";
                break; 

            case 'suatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $tk = loadone_taikhoan($_GET['id']);
                }            
                include "taikhoan/update.php";
                break; 
            case 'updatetk':
                if(isset($_POST['btn-submit'])&&($_POST['btn-submit'])){
                    $user= $_POST['user'];
                    $pass= $_POST['pass'];
                    $email= $_POST['email'];
                    $address= $_POST['address'];
                    $tel= $_POST['tel'];
                    $role= $_POST['role'];
                    $id= $_POST['id'];

                    update_taikhoan_admin($id,$user,$pass,$email,$address,$tel,$role);
                    $thongbao= "Cập nhật thành công";
                }
                $listtaikhoan= loadall_taikhoan();
                include "taikhoan/list.php";
                break; 
            case 'xoatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan= loadall_taikhoan();
                include "taikhoan/list.php";
                break; 
            /* controller bình luận */    
            case 'dsbl':
                $listbinhluan= loadall_binhluan(0);
                include "binhluan/list.php";
                break; 
            case 'xoabl':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan= loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            /* controller thống kê*/ 
            case 'thongke':
                $listthongke= loadall_thongke();
                include "thongke/list.php";
                break; 
            case 'bieudo':
                $listthongke= loadall_thongke();
                include "thongke/bieudo.php";
                break; 
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }


    

    include "footer.php";


?>