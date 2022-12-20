<?php include "../private/init.php"; ?>
<?php include SHARED__PATH . "/header.php"; ?>
<main class="main">
<h2 class="main__h2">
    Home
</h2>
<a class="main__link" href="<?php echo url_path('/contentbeheer/beheer.php') ?>">Beheer</a>
<a class="main__link" href="<?php echo url_path('/contentbeheer/blogs.php') ?>">Blogs</a>
<a class="main__link" href="<?php echo url_path('/contentbeheer/cms.php') ?>">CMS</a>
</main>

<?php include SHARED__PATH . "/footer.php"; ?>