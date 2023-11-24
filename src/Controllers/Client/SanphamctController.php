<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class SanphamctController extends Controller
{
    /*
        Đây là hàm hiển thị giao diện client
    */

    public function sanphamct() {
        $this->render('sanphamct');
    }

}
