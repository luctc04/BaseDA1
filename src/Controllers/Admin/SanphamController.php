<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Danhmuc;
use Ductong\BaseMvc\Models\Sanpham;

class SanphamController extends Controller{

    /* Lấy danh sách */
    public function index() {
        $sanphams = (new Sanpham())->all();
        $danhmucs = (new Danhmuc())->all();

        // Mảng này có cấu trúc, key là id danh mục, value là tên danh mục
        // Tạo ra mảng này để hiển thị tên danh mục sản phẩm ở danh sách
        $arrayDanhmucIdName = [];
        foreach ($danhmucs as $danhmuc) {
            $arrayDanhmucIdName[$danhmuc['id']] = $danhmuc['name'];
        }

        $this->renderAdmin("sanphams/index", 
            [
                "sanphams" => $sanphams, 
                "arrayDanhmucIdName" => $arrayDanhmucIdName
            ]
        );
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'id_dm' => $_POST['id_dm'],
                'name' => $_POST['name'],
                'xuatsu' => $_POST['xuatsu'],
                'mota' => $_POST['mota'],
            ];

            $data['img'] = null;
            $img = $_FILES['img'] ?? null;
            if ($img) {

                // Đường dẫn lưu DB vì thư mục upload cùng cấp với index.php
                // Khi lưu vào DB, chú ý là trước uploads có dấu /
                $pathSaveDB = '/uploads/' . $img['name'];

                // Đường dẫn upload có thêm __DIR__ . '/../../../'
                // vì File ProductController của mình đang cách thư mục uploads 3 cấp
                // Nên sẽ thấy có 3 lần ../
                // __DIR__ là 2 const mặc định của PHP để lấy ra đường dẫn thư mục hiện tại của ProductController 
                $pathUpload = __DIR__ . '/../../../uploads/' . $img['name'];

                if (move_uploaded_file($img['tmp_name'], $pathUpload)) { 
                    $data['img'] = $pathSaveDB;
                } 
            }

            (new Sanpham())->insert($data);

            header('Location: /admin/sanphams');
        }

        $danhmucs = (new Danhmuc())->all();

        $this->renderAdmin("sanphams/create", ["danhmucs" => $danhmucs]);
    }

    /* Cập nhật */
    public function update() {

        if (isset($_POST["btn-submit"])) { 
            $data = [
                'id_dm' => $_POST['id_dm'],
                'name' => $_POST['name'],
                'xuatsu' => $_POST['xuatsu'],
                'mota' => $_POST['mota'],
            ];

            $data['img'] = $_POST['img_current'];
            $img = $_FILES['img'] ?? null;
            $flag = false;
            if ($img) {

                $pathSaveDB = '/uploads/' . $img['name'];
                $pathUpload = __DIR__ . '/../../../uploads/' . $img['name'];

                if (move_uploaded_file($img['tmp_name'], $pathUpload)) { 
                    $data['img'] = $pathSaveDB;
                    $flag = true;
                } 
            }

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Sanpham())->update($data, $conditions);
            
            if ($flag) {

                // Xóa file dùng hàm unlink 
                // Path file cũng phải giống như $pathUpload
                $pathFile = __DIR__ .'/../../..'. $_POST['img_current'];
                unlink($pathFile);
            }

            header('Location: /admin/sanphams');
        }

        $danhmucs = (new Danhmuc())->all();
        $sanpham = (new Sanpham())->findOne($_GET["id"]);

        $this->renderAdmin("sanphams/update", ["sanpham" => $sanpham, 'danhmucs' => $danhmucs]);
    }

    
    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Sanpham())->delete($conditions);

        $pathFile = __DIR__ .'/../../..'. $_POST['img'];
        unlink($pathFile);

        header('Location: /admin/sanphams');
    }
 }