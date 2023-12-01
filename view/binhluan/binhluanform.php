<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../css/style2.css"> -->
    <link rel="stylesheet" href="../../template/funnypet/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../template/funnypet/css/animate.css">
    <link rel="stylesheet" href="../../template/funnypet/css/jquery-ui.min.css">
    <link rel="stylesheet" href="../../template/funnypet/css/meanmenu.min.css">
    <link rel="stylesheet" href="../../template/funnypet/css/owl.carousel.css">
    <link rel="stylesheet" href="../../template/funnypet/css/slick.css">
    <link rel="stylesheet" href="../../template/funnypet/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../template/funnypet/css/style.css">
    <link rel="stylesheet" href="../../template/funnypet/css/responsive.css">
    <script src="./template/funnypet/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        body {
            margin: 0;
        }

        * {
            font-size: 0.9vW;
            color: #333;
        }

        .binhluan table {
            width: 77%;
            margin-left: 20%;
        }

        .binhluan form {
            width: 100%;
            margin-left: 10%;
        }

        .binhluan hr {
            width: 200%;
            margin-bottom: 5px;
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

        .binhluan .your-rating{
            width: 100%;
            margin-left: 85%;
        }
        
        .binhluan .dangnhap{
            width: 77%;
            margin-left: 40%;
        }
        .binhluan .trai{
            margin-left: 35%;
        }
    </style>
</head>

<body>
    <div class="row mb ">
        <?php
        if (isset($_SESSION['user']['id'])) {

        ?>
            <div class="boxcontent binhluan review-form-wrapper ">
                <table>
                    <?php

                    foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '<tr><td>' . $noidung . '</td>';
                        echo '<td>' . $iduser . '</td>';
                        echo '<td>' . $ngaybinhluan . '</td></tr>';
                    }
                    ?>
                </table>
                <hr>
                <!-- $_SERVER['PHP_SELF']: thực thi lại cái bản thân của nó -->

                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="your-rating">
                        <input type="hidden" name="idpro" value="<?= $idpro ?>">
                    </div>
                    <textarea name="noidung" id="product-message" cols="70" rows="5" placeholder="Your Rating"></textarea>
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
            </div>

        <?php } else { ?>

            <div class="boxcontent binhluan review-form-wrapper ">
                <table class="dangnhap"> 
                    <?php

                    foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '<tr><td>' . $noidung . '</td>';
                        echo '<td>' . $iduser . '</td>';
                        echo '<td>' . $ngaybinhluan . '</td></tr>';
                    }
                    ?>
                </table>
                <hr class="trai"><br>
                <!-- $_SERVER['PHP_SELF']: thực thi lại cái bản thân của nó -->

                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="your-rating">
                        <input type="hidden" name="idpro" value="<?= $idpro ?>">
                    </div>
                    <div class="your-rating">
                        <strong style="color:red;">Cần đăng nhập mới được bình luận!</strong>
                    </div>
                </form>
            </div>



        <?php } ?>

        <?php

        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('H:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            // $_SERVER['HTTP_REFERER']  : trở về trang cha 
            header("location: " . $_SERVER['HTTP_REFERER']);
        }


        ?>

    </div>

</body>

</html>