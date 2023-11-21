<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Sanpham;

class SanphamController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $sanphams = (new Sanpham)->all();

        $this->renderAdmin('sanphams/index', ['sanphams' => $sanphams]);
    }

    public function create() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'img' => $_POST['img'],
                'mota' => $_POST['mota'],
                'view' => $_POST['view'], 
                'iddm' => 0,
            ];
            
            $img = $_FILES['img']['name'];
            $targetDir = __DIR__ . "/../../../uploads/";
            $targetFile = $targetDir . basename($_FILES["img"]["name"]);
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
                $data['img'] = $img;
            }
        
            (new Sanpham)->insert($data);

            header('Location: /admin/sanphams');
        }

        $this->renderAdmin('sanphams/create');
    }

    public function update() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'img' => $_POST['img'],
                'mota' => $_POST['mota'],
                'view' => $_POST['view'],
            ];
            $img = $_FILES['img']['name'];
            $targetDir = __DIR__ . "/../../../uploads/";
            $targetFile = $targetDir . basename($_FILES["img"]["name"]);
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
                $data['img'] = $img;
            }
            $conditions = [
                ['id', '=', $_GET['id']]
            ];

            (new Sanpham)->update($data, $conditions);
        }

        $sanpham = (new Sanpham)->findOne($_GET['id']);

        $this->renderAdmin('sanphams/update', ['sanpham' => $sanpham]);
    }

    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new Sanpham)->delete($conditions);

        header('Location: /admin/sanphams');
    }
 }