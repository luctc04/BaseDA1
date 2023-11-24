<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class SanphamfullController extends Controller
{
    /*
        Đây là hàm hiển thị giao diện client
    */

    public function sanphamfull() {
        $this->render('sanphamfull');
    }

}
