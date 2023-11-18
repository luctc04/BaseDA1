<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Taikhoan extends Model{
    protected $table = 'taikhoans';
    protected $columns = [
        'user',
        'pass',
        'email',
        'address',
        'tel',
        'role',
    ];
    
    
}
?>