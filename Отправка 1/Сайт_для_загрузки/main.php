<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="assets/main.css">


</head>

<?php


if(!empty($_POST['Name']) and !empty($_POST['Phone']) and !empty($_POST['Last_Name']) and !empty($_POST['Email']) and !empty($_POST['Disc'])) {

    $to = "orders@anleod.ru";

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
        ?>

        <body class="leon">
            <div class="Status">
                <div class="Status__text">Заявка одобрена, ожидайте ответа!</div>
                <div class="Status__btn">
                    <a class="Status__btn" href="#">Вернуться</a>
                </div>
            </div>
        </body>
        </html>

<?php
    } else {
        ?>
    <body class="leon">
    <div class="Status">
        <div class="Status__text">Что-то пошло не так, попробуйте еще раз</div>
        <div class="Status__btn">
            <a class="Status__btn" href="#">Вернуться</a>
        </div>
    </div>
    </body>
    </html>
<?php
    }

} else {
    ?>
    <body class="leon">
    <div class="Status">
        <div class="Status__text">Что-то пошло не так, попробуйте еще раз</div>
        <div class="Status__btn">
            <a class="Status__btn" href="#">Вернуться</a>
        </div>
    </div>
    </body>
    </html>
    <?php
}


?>
