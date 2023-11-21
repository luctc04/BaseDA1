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
            ];

            (new Sanpham)->insert($data);

            header('Location: /admin/sanphams');
        }

        $this->renderAdmin('sanphams/createSP');
    }

    public function update() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'img' => $_POST['img'],
                'mota' => $_POST['mota'],
                // 'view' => $_POST['view'],
                // 'iddm' => $_POST['iddm'],
            ];

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