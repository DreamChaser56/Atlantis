<?php

if (isset($_POST['submit'])){
    $title        = 'Atlantis Resturant & Louange';
    $mail_from    = $_POST['email'];
    $mail_replay  = $_POST['email'];
    $mail_to      = 'nsmith562630@gmail.com';
    $subject      = 'PHPMailer sendmail test';
    $name         = $_POST['name'];
    $phone        = $_POST['phone'];
    $date         = $_POST['date'];
    $time         = $_POST['time'];
    $people       = $_POST['people'];
    $message      = $_POST['message'];

    $txt = "Reservation For " .$name. ".\n Email:" .$mail_from. ".\n Phone:" .$phone. ".\n Date and Time" .$date. .$time. ".\n Amount of People:" .$people ".\n\n" .$message;
    mail($mail_to, $subject, $txt)
}

?>