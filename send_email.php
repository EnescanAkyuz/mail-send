<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Mail gönderme işlemi
    $headers = "From: enescanq@gmail.com"; // Gönderen e-posta adresi değiştirilmeli
    if (mail($to_email, $subject, $message, $headers)) {
        echo "E-posta başarıyla gönderildi.";
    } else {
        echo "E-posta gönderilirken bir hata oluştu.";
    }
}
?>
