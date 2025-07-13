<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "agbalayasamad@gmail.com";
    $subject = "New Contact Message";
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    $content = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $content, $headers)) {
        echo "<script>document.querySelector('.success').style.display = 'block';</script>";
    } else {
        echo "<script>document.querySelector('.error').style.display = 'block';</script>";
    }
}
?>