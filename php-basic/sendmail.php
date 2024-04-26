<?php
// autoload.phpのパスを正しく指定して読み込む
require 'PHPMailer/vendor/autoload.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

// 以下にメール送信の設定を追加
$mail->isSMTP();
$mail->Host = 'smtp.example.com';  // SMTPサーバーのアドレス
$mail->SMTPAuth = true;
$mail->Username = 'your_email@example.com'; // SMTP認証のユーザー名
$mail->Password = 'your_password';  // SMTP認証のパスワード
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('to@example.com', 'Joe User');     // 送信先

$mail->isHTML(true);                                  // HTMLメールを有効にする
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
