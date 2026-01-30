<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "test@hotmail.com"; // Alıcı e-posta adresi
    $subject = "About survey assistance"; // E-posta konusu
    $name = $_POST["name"]; // İsim alanından gelen veri
    $email = $_POST["email"]; // E-posta alanından gelen veri
    $phone = $_POST["phone"]; // Telefon alanından gelen veri
    $message = $_POST["message"]; // Mesaj alanından gelen veri

    // E-posta başlıkları
    $headers = "From: $email\r\n" .
        "Reply-To: $email\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // E-posta içeriğini oluşturma
    $email_content = "Gönderen İsim: $name\n" .
        "Gönderen E-posta: $email\n" .
        "Telefon: $phone\n\n" .
        "Mesaj:\n$message";

    // E-postayı oluşturup gönderme işlemi
    if (mail($to, $subject, $email_content, $headers)) {
        echo "E-posta başarıyla gönderildi.";
    } else {
        echo "E-posta gönderilirken bir hata oluştu.";
    }
}
?>

