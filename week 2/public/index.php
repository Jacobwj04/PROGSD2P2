<?php

$swearWords = array( "bitch", "kut", "twat", "cunt", "tyfus",);
$changeSwearWords = "#@*!";

if(isset($_POST["submit"]) && !empty($_POST["submit"])){
    $user = $_POST["name"];
    $filterSwearWords = str_replace($swearWords, $changeSwearWords, $user);
    $user = trim($user) . stripslashes($user) . htmlspecialchars($user);
    echo $user;
}
if(isset($_POST["submit"]) && !empty($_POST["submit"])){
    $email = $_POST["email"];
    $emailValidate = trim($email) . stripslashes($email) . htmlspecialchars($email);
}
if(isset($_POST["submit"]) && !empty($_POST["submit"])){
    $message = $_POST["message"];
    $messageValidate = trim($message) . stripslashes($message) . htmlspecialchars($message);
}
else{
    echo "error";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Form</title>
</head>
<body>
    <form action="" method="POST" class="form">
        <input type="text" class="form__input" placeholder="Name" id="name" name="name">
        <input type="email" class="form__input" placeholder="Email" id="email" name="email">
        <textarea cols="30" rows="10" class="form__textarea" placeholder="Message" id="message" name="message"></textarea>
        <input class="form__submit" type="submit" id="submit" name="submit">
    </form>
</body>
</html>