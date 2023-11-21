<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Taikhoan;

class TaikhoanController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách tài khoản
    */
    public function index() {
        $taikhoans = (new Taikhoan)->all();
        
        $this->renderAdmin('taikhoans/index', ['taikhoans' => $taikhoans]);
    }

    public function create() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'user' => $_POST['user'],
                'pass' => $_POST['pass'],
                'email' => $_POST['email'],
                'address' => $_POST['address'],
                'tel' => $_POST['tel'],
                'role' => $_POST['role'],
            ];

            (new Taikhoan)->insert($data);

            header('Location: /admin/taikhoans');
        }

        $this->renderAdmin('taikhoans/create');
    }
    
    public function update() {

        if (isset($_POST["btn-submit"])) { 
            $data = [
                'user' => $_POST['user'],
                'pass' => $_POST['pass'],
                'email' => $_POST['email'],
                'address' => $_POST['address'],
                'tel' => $_POST['tel'],
                'role' => $_POST['role'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Taikhoan())->update($data, $conditions);

            header('Location: /admin/taikhoans');
        }

        $taikhoan = (new Taikhoan())->findOne($_GET["id"]);

        $this->renderAdmin("taikhoans/update", ["taikhoan" => $taikhoan]);
    }

    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new Taikhoan)->delete($conditions);

        header('Location: /admin/taikhoans');
    }
}
