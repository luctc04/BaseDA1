<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class LoginController extends Controller
{
    /*
        Đây là hàm hiển thị giao diện client
    */
    
    public function login() {
        $this->render('login');
    }
}