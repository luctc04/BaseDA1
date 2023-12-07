<?php
session_start();
// var_dump($_SESSION['khach_hang']);
include "../global.php";
$email = $taikhoan['email'];
include('src/PHPMailer.php');
include('src/Exception.php');
include('src/OAuth.php');
include('src/POP3.php');
include('src/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'funnypet31@gmail.com';                 // SMTP username
    $mail->Password = 'fpfrjntnsyuldhus';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('funnypet31@gmail.com', 'Funny Pet');
    $mail->addAddress($email, 'Lucdzs1tg');     // Add a recipient
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'PUNNY PET XIN CAM ON QUY KHACH';
    $mail->Body = 'Xin chào ,

    Chúng tôi xin gửi lời cảm ơn chân thành đến bạn và người bạn lông mừng đã tin tưởng và chọn lựa cửa hàng của chúng tôi cho nhu cầu về thú cưng. Sự ủng hộ của bạn giúp chúng tôi tiếp tục mang đến những sản phẩm chất lượng và dịch vụ tận tâm nhất cho thú cưng của bạn.
    
    Nếu có bất kỳ thắc mắc hay cần hỗ trợ nào, đừng ngần ngại liên hệ với chúng tôi. Chúng tôi luôn sẵn lòng hỗ trợ bạn và người bạn lông mừng.
    
    Cảm ơn bạn rất nhiều và chúc bạn và thú cưng có những ngày thật vui vẻ!
    
    Trân trọng,
    Funny Pet';
    // $mail->AltBody = 'Trân trọng,"Perfume Shop"';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
