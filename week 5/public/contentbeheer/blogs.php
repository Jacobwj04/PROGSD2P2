<?php include "../../private/init.php"; ?>
<?php include "../../private/db/connect.php"; ?>
<?php include SHARED__PATH . "/header.php"; ?>
<?php 

$result = $db->query('SELECT * FROM `onderwerpen`');
//Create array to keep all results
$data = array();

// // Fetch Associated Array (1 for SQLITE3_ASSOC)
while ($res = $result->fetchArray(1)) {
    //insert row into array
    array_push($data, $res);
}

?>
<main class="main">
<h2 class="main__h2">
    Blogs
</h2>

<?php

lees_bestand('blogs.txt');

?>

<?php foreach ($data as $row) : ?>

    <p class="main__p"><?php print $row['naam']; ?></p>

<?php endforeach; ?>

<ul class="main__list">
    <li class="main__listItem">
    <a class="main__link" href="<?php echo url_path('/index.php') ?>">Home</a>
    </li>
</ul>


</main>

<?php include SHARED__PATH . "/footer.php"; ?>