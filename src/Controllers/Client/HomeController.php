<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị giao diện client
    */
    public function index() {
        $this->render('home');
    }
}
