<?php include "../private/init.php"; ?>
<?php include SHARED__PATH . "/header.php"; ?>

<main class="main">

<h2 class="main__h2">
    Home
</h2>

<ul class="main__list">
    <li class="main__listItem">
    <a class="main__link" href="<?php echo url_path('/contentbeheer/beheer.php') ?>">Beheer</a>
    </li>
    <li class="main__listItem">
    <a class="main__link" href="<?php echo url_path('/contentbeheer/blogs.php') ?>">Blogs</a>
    </li>
    <li class="main__listItem">
    <a class="main__link" href="<?php echo url_path('/contentbeheer/cms.php') ?>">CMS</a>
    </li>
</ul>

</main>

<?php include SHARED__PATH . "/footer.php"; ?>