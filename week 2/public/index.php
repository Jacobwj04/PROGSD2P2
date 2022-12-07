<?php

if(isset($_POST["submit"])){
    checkFormValues("name");
    checkFormValues("email");
    checkFormValues("message");
}

function checkFormValues($formPostKey){
    if(isset($_POST[$formPostKey]) && !empty($_POST[$formPostKey])){
        $badWords = array( "fuck", "bitch", "twat", "hoer", "tyfus", "hoertje", "cunt");
        $changeBadWord = "#@*!";

        $filterValue = trim($_POST[$formPostKey]);
        $filterValue = stripslashes($filterValue);
        $filterValue = htmlspecialchars($filterValue);
        $filterValue = str_replace($badWords, $changeBadWord, $filterValue);
        return $filterValue;
    }
    else{
        echo "Please fill in your ${formPostKey} :D";
    }
};

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