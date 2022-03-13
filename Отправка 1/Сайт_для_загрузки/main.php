<?php

if(!empty($_POST['Name']) and !empty($_POST['Phone']) and !empty($_POST['Last_Name']) and !empty($_POST['Email']) and !empty($_POST['Disc'])) {

    echo 5;

    $to = "leon200207@yandex.ru";

    $Name = htmlspecialchars($_POST['Name']);
    $Name = urldecode($Name);
    $Name = trim($Name);

    $Phone = htmlspecialchars($_POST['Phone']);
    $Phone = urldecode($Phone);
    $Phone = trim($Phone);

    $Last_Name = htmlspecialchars($_POST['Last_Name']);
    $Last_Name = urldecode($Last_Name);
    $Last_Name = trim($Last_Name);

    $Email = htmlspecialchars($_POST['Email']);
    $Email = urldecode($Email);
    $Email = trim($Email);

    $Disc = htmlspecialchars($_POST['Disc']);
    $Disc = urldecode($Disc);
    $Disc = trim($Disc);

    $headers = "From: $Email" . "\r\n" .
        "Reply-To: $Email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();


    $subject = "Клиент";

    $mes = "Имя: " . $Name . "\n" . "Фамилия: " . $Last_Name . "\n" .
        "Email: " . $Email . "\n" . "Описание: " . "\n" . $Disc;

    if(mail($to, $subject, $mes, $headers)) {
        echo 123;
    } else {
        echo 321;
    }

} else {
    echo 6;
}


?>