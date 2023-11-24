<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class GiohangController extends Controller
{
    /*
        Đây là hàm hiển thị giao diện client
    */
    public function giohang() {
        $this->render('giohang');
    }
}
