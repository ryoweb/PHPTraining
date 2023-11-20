<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータを取得
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // ここでデータの検証やデータベースへの保存など、お問い合わせフォームの処理を行う

    // 例: メールで送信する場合
    $to = "your-email@example.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $mailBody = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    mail($to, $subject, $mailBody, $headers);

    // お問い合わせが完了したら、ユーザーを別のページにリダイレクトするなどの処理を行う

    // 例: リダイレクト
    header("Location: thank-you.php");
    exit();
}
