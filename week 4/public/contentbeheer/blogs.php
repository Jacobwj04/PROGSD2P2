<?php include "../../private/init.php"; ?>
<?php include SHARED__PATH . "/header.php"; ?>
<main class="main">
<h2 class="main__h2">
    Blogs
</h2>

<?php

lees_bestand('blogs.txt');

?>

<a class="main__link" href="<?php echo url_path('/index.php') ?>">Home</a>

</main>

<?php include SHARED__PATH . "/footer.php"; ?>