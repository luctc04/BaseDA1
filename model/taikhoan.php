<?php
    function loadall_taikhoan(){
        $sql = "select * from taikhoan order by id desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function loadone_taikhoan($id){
        $sql = "select * from taikhoan where id=".$id;
        $tk = pdo_query_one($sql);
        return $tk;
    }
    function insert_taikhoan($email, $user, $pass){
        $sql= "INSERT INTO taikhoan(email, user, pass) VALUES ('$email','$user','$pass')";
        pdo_execute($sql); 
    }
    function delete_taikhoan($id){
        $sql = "delete from taikhoan where id=".$id;
        pdo_execute($sql);
    }
    function checkuser($user, $pass){
        $sql = "select * from taikhoan where user='".$user."' AND pass='".$pass."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function checkemail_dangky($email){
        $sql = "SELECT * FROM taikhoan WHERE email = '$email'";
        $checkmail_dangky = pdo_query($sql);
        return $checkmail_dangky;    
    }
    function checkemail($email){
        $sql = "select * from taikhoan where email='".$email."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function isEmail($email){
        $checkEmail = filter_var($email,FILTER_VALIDATE_EMAIL);
        return $checkEmail;
    }
    function update_taikhoan($id,$user,$pass,$email,$address,$tel){
        $sql= "update taikhoan set user='$user' , pass ='$pass', email ='$email',address = '$address' ,tel = '$tel' where id = $id";
        pdo_execute($sql);
    }
    function update_taikhoan_admin($id,$user,$pass,$email,$address,$tel,$role){
        $sql= "update taikhoan set user='$user' , pass ='$pass', email ='$email',address = '$address' ,tel = '$tel',role = '$role' where id = $id";
        pdo_execute($sql);
    }
    
?>