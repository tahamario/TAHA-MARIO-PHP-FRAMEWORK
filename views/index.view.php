<?php require('components/head.php') ?>

<?php include('components/nav.php') ?>

<?php require('components/banner.php') ?>

<div class="content">
    <div>
        <p>This is home page</p>
    </div>
    <div>
        <p>Welcome <?= $_SESSION['auth']['name'] ?? '<b>Guest</b>' ?></p>
    </div>
</div>
<?php require('components/footer.php') ?>