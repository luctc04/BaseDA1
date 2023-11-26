<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    
    $idpro= $_REQUEST['idpro'];
    $dsbl= loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style2.css">
    <style>
        body {
            margin: 0;
        }

        * {
            font-size: 1.5vW;
            color: #333;
        }

        .binhluan table {
            width: 77%;
            margin-left: 5%;
        }

        .binhluan table td:nth-child(1) {
            width: 50%;

        }

        .binhluan table td:nth-child(2) {
            width: 20%;
        }

        .binhluan table td:nth-child(3) {
            width: 30%;
        }
    </style>
</head>

<body>
    <div class="row mb ">
        <div class="boxtitle">BÌNH LUẬN</div>
            <?php
                if(isset($_SESSION['user']['id'])){

            ?>
                <div class="boxcontent binhluan">
                    <table>
                        <?php
                                    
                            foreach ($dsbl as $bl) {
                                extract($bl);
                                echo '<tr><td>'.$noidung.'</td>';
                                echo '<td>'.$iduser.'</td>';
                                echo '<td>'.$ngaybinhluan.'</td></tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="boxfooter binhluanform">
                    <!-- $_SERVER['PHP_SELF']: thực thi lại cái bản thân của nó -->
                    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                        <input type="hidden" name="idpro" value="<?= $idpro?>">
                        <input type="text" name="noidung">
                        <input type="submit" name="guibinhluan" value="Gửi bình luận">
                    </form>
                </div>

        <?php }else{?>

                <div class="boxcontent binhluan">
                    <table>
                        <?php
                                    
                                    foreach ($dsbl as $bl) {
                                        extract($bl);
                                        echo '<tr><td>'.$noidung.'</td>';
                                        echo '<td>'.$iduser.'</td>';
                                        echo '<td>'.$ngaybinhluan.'</td></tr>';
                                    }

                                    ?>
                    </table>
                </div>
                <div class="boxfooter binhluanform">
                    <strong style="color:red;">Cần đăng nhập mới được bình luận!</strong>
                </div>

        <?php }?>

        <?php

            if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
                $noidung= $_POST['noidung'];
                $idpro= $_POST['idpro'];
                $iduser= $_SESSION['user']['id'];
                $ngaybinhluan= date('H:i:sa d/m/Y');
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                // $_SERVER['HTTP_REFERER']  : trở về trang cha 
                header("location: ".$_SERVER['HTTP_REFERER']);
            }
            

            ?>

    </div>



</body>

</html>