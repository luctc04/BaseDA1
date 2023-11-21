<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Danhmuc;

class DanhmucController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $danhmuc = (new Danhmuc())->all();

        $this->renderAdmin("danhmucs/index", ["danhmucs" => $danhmuc]);
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'name' => $_POST['name'],
            ];

            (new Danhmuc())->insert($data);

            header('Location: /admin/danhmucs');
        }

        $this->renderAdmin("danhmucs/create");
    }

    /* Cập nhật */
    public function update() {

        if (isset($_POST["btn-submit"])) { 
            $data = [
                'name' => $_POST['name'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Danhmuc())->update($data, $conditions);
            header('Location: /admin/danhmucs');
        }

        $danhmuc = (new Danhmuc())->findOne($_GET["id"]);


        $this->renderAdmin("danhmucs/update", ["danhmuc" => $danhmuc]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Danhmuc())->delete($conditions);

        header('Location: /admin/danhmucs');
    }
}