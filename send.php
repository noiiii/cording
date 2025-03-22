<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "noiiiiinoha@gmail.com"; // Your email address
    $subject = "お問い合わせがありました";
    $body = "お名前: $name\n";
    $body .= "メールアドレス: $email\n";
    $body .= "お問い合わせ内容:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>お問い合わせありがとうございました。送信が完了しました。</p>";
    } else {
        echo "<p>送信に失敗しました。もう一度お試しください。</p>";
    }
} else {
    echo "<p>不正なアクセスです。</p>";
}
?>
