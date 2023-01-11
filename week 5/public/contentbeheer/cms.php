<?php

$swearWords = array( "bitch", "kut", "twat", "cunt", "tyfus",);
$changeSwearWords = "#@*!";

if(isset($_POST["submit"]) && !empty($_POST["submit"])){
    $user = $_POST["name"];
    $userVaidate = trim($user) . stripslashes($user) . htmlspecialchars($user);
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
<?php include "../../private/init.php"; ?>
<?php include SHARED__PATH . "/header.php"; ?>
<main class="main">
    <form action="" method="POST" class="form">
        <input type="text" class="form__input" placeholder="Name" id="name" name="name">
        <input type="email" class="form__input" placeholder="Email" id="email" name="email">
        <textarea cols="30" rows="10" class="form__textarea" placeholder="Message" id="message" name="message"></textarea>
        <input class="form__submit" type="submit" id="submit" name="submit">
    </form>
    <ul class="main__list">
    <li class="main__listItem">
    <a class="main__link" href="<?php echo url_path('/index.php') ?>">Home</a>
    </li>
</ul>
</main>

<?php include SHARED__PATH . "/footer.php"; ?>

<?php

include "../../private/db/connect.php";

$db->exec("INSERT INTO cms (name, email, message) VALUES ('$user', '$email', '$message')");

?>
