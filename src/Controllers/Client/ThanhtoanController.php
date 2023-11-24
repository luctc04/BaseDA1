<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class ThanhtoanController extends Controller
{
    /*
        Đây là hàm hiển thị giao diện client
    */
    public function thanhtoan() {
        $this->render('thanhtoan');
    }
}
